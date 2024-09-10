<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Patner;

class DashboardController extends Controller
{
    public function last_projects() {
        return [
            "projects" => Project::latest()->take(10)->get()->map(function($item) {
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'description' => $item->description,
                    'img' => env('APP_DEBUG') ? 'http://127.0.0.1:8000/storage/'.$item->img :  env('APP_URL').'/storage/'.$item->img,
                    'category' => $item->service
                ];
            })
        ];
    }

    public function projects() {
        return
            Project::all()->map(function($item) {
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'description' => $item->description,
                    'img' => env('APP_DEBUG') ? 'http://127.0.0.1:8000/storage/'.$item->img :  env('APP_URL').'/storage/'.$item->img,
                    'category' => $item->service
                ];
            });
    }

    public function partners() {
        return Patner::all()->map(function($item) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'img' => env('APP_DEBUG') ? 'http://127.0.0.1:8000/storage/'.$item->img :  env('APP_URL').'/storage/'.$item->img,
            ];
        });
    }
}
