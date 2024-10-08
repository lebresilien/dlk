<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('last_projects', [DashboardController::class, 'last_projects']);
Route::get('projects', [DashboardController::class, 'projects'])->name('projects');
Route::get('partners', [DashboardController::class, 'partners']);
Route::get('projects/{slug}', [DashboardController::class, 'details'])->name('projects.show');
