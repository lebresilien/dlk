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
                $photos = [];
                if($item->attachments) {
                    foreach($item->attachments as $attach) {
                        array_push($photos, env('APP_DEBUG') ? 'http://127.0.0.1:8000/storage/'. $attach : env('APP_URL').'/storage/'.$attach);
                    }
                }
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'slug' => $item->slug,
                    'description' => $item->description,
                    'img' => env('APP_DEBUG') ? 'http://127.0.0.1:8000/storage/'.$item->img :  env('APP_URL').'/storage/'.$item->img,
                    'category' => $item->service,
                    'attachments' => $photos
                ];
            })
        ];
    }

    public function projects() {
        return
            Project::all()->map(function($item) {
                $photos = [];
                if($item->attachments) {
                    foreach($item->attachments as $attach) {
                        array_push($photos, env('APP_DEBUG') ? 'http://127.0.0.1:8000/storage/'. $attach : env('APP_URL').'/storage/'.$attach);
                    }
                }
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'description' => $item->description,
                    'img' => env('APP_DEBUG') ? 'http://127.0.0.1:8000/storage/'.$item->img :  env('APP_URL').'/storage/'.$item->img,
                    'category' => $item->service,
                    'attachments' => $photos
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

    public function project($slug) {

        $project = Project::where('slug', $slug)->first();

        return view('projects.show', [
            'data' => $project
        ]);
    }
}
