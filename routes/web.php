<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/home');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();
Route::group(['prefix' => LaravelLocalization::setLocale()], function(){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/aboutUs', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/partners', [App\Http\Controllers\HomeController::class, 'partners'])->name('partners');
Route::any('/news', [App\Http\Controllers\HomeController::class, 'news'])->name('news');
Route::get('/facility', [App\Http\Controllers\HomeController::class, 'facility'])->name('facility');
Route::any('/courses', [App\Http\Controllers\HomeController::class, 'courses'])->name('courses');
Route::post('/registerCourse', [App\Http\Controllers\HomeController::class, 'registerCourse'])->name('registerCourse');
Route::get('/contactUs', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contactUs');
Route::post('/contactUs', [App\Http\Controllers\HomeController::class, 'contact_Us'])->name('contact_Us');
Route::get('/project/{id}', [App\Http\Controllers\HomeController::class, 'project'])->name('project');
Route::get('/agent/{id}', [App\Http\Controllers\HomeController::class, 'agent'])->name('agent');
Route::any('/news_details/{id}', [App\Http\Controllers\HomeController::class, 'news_details'])->name('news_details');
Route::post('/saveComment', [App\Http\Controllers\HomeController::class, 'saveComment'])->name('saveComment');

});