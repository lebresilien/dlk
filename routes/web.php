<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('service');
})->name('services');

Route::get('/services/plumber', function () {
    return view('services.plumber');
})->name('services.plumber');

Route::get('/services/secure-electonic', function () {
    return view('services.secure_electronic');
})->name('services.secure_electronic');

Route::get('/services/climatisation', function () {
    return view('services.climatisation');
})->name('services.climatisation');

Route::get('/projects', function () {
    return view('project');
})->name('projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('contact-us', [ContactController::class,'contact'])->name('contact-us');


Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('language');

 Route::post('mailing', function(Request $request) {
    return $request->all();
});
