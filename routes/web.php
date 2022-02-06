<?php

use App\Http\Controllers\ProperSession;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\Session\Session;

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
});

// Route::get('/login',[SessionController::class,'login'])->name('session.login');
// Route::post('/userlogin',[SessionController::class,'userLogin'])->name('user.login');
// Route::post('/deletesession',[SessionController::class,'destroy'])->name('destroy.user');

// Route::view('/home','home');
//sessions

Route::view('session','sessionlogin');
Route::post('sessionLogin',[ProperSession::class,'login'])->name('login');
Route::view('/success','success');

Route::get('/session',function(){
    if(session()->has('user')){
       return redirect('success');
    }
    return view('sessionLogin');
});

Route::get('/logout',function(){
    if(session()->has('user')){
        session()->forget('user');
    }
    return view('sessionLogin');
});
