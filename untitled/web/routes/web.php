<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
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
//
//Route::get('/app', function (){
//    return view('app');
//});
Route::get('/',  [\App\Http\Controllers\MainController::class, 'home'])->name('home');


Route::get('/about', function (){
    return view('about');
});

Route::get('/detail/all{id}', [\App\Http\Controllers\MainController::class, 'details'])->name('contact-data');

Route::get('/review', [\App\Http\Controllers\MainController::class, 'review'])->name('review');

Route::post('/review/check', [\App\Http\Controllers\MainController::class, 'review_check'])->name('send_form');


Route::get('/login', [\App\Http\Controllers\MainController::class, 'login'])->name('login');

Route::get('/registration', [\App\Http\Controllers\MainController::class, 'registration'])->name('registration');


Route::post("userLogin", [UserAuth::class, 'userLogin']);



Route::post("userReg", [UserAuth::class, 'userReg']);

Route::get("addkitchenget", [\App\Http\Controllers\MainController::class, 'addkitchenget'])->name('addkitchenget');
Route::post("addkitchen", [\App\Http\Controllers\MainController::class, 'addkitchen']);

Route::get("/profile/all{id}", [\App\Http\Controllers\MainController::class, 'profile'])->name('profile');
Route::get('/logout', function (){
    if(session()->has('email'))
    {
        session()->pull('email');
    }
    return redirect('login');
});
