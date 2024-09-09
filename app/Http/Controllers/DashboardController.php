<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class DashboardController extends Controller
{
    public function last_projects() {
        return [
            "projects" => Project::all()->map(function($item) {
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'description' => $item->description,
                    'img' => env('APP_DEBUG') ? 'http://127.0.0.1:8000/storage/'.$item->img :  env('APP_URL').'/storage/'.$item->img,
                    'category' => $item->service
                ];
            }),
        ];
    }
}
