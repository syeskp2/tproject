<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\TestapiController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// for crud single form
Route::get('form', [TodoController::class, 'index']);
Route::post('form', [TodoController::class, 'store'])->name('store-todo');
Route::put('update/{todo}', [TodoController::class, 'update'])->name('update-todo');
Route::get('/edit/{todo_id}', [TodoController::class, 'index']);

//for relationship
Route::get('/test', [TestController::class, 'index']);

// for contact form 
Route::get('contact', [ContactFormController::class, 'index']);
Route::post('contact', [ContactFormController::class, 'store']);


//for  Cookies - Get, Set, Delete Cookie
Route::get('setCookie', [CookieController::class, 'setCookie']);
Route::get('getCookie', [CookieController::class, 'getCookie']);
Route::get('deleteCookie', [CookieController::class, 'deleteCookie']);


// for session
Route::get('get-all-session', function() {
    // return "hi";
    $session = session()->all();
    p($session);
});

Route::get('set-session', function(Request $request) {
    $request->session()->put('user_name', 'Sonu Kumar');
    $request->session()->put('user_id', '123');
    // $request->session()->flash('status', 'Success');
    return redirect('get-all-session');
});

Route::get('destroy-session', function() {
    session()->forget('user_name');
    session()->forget('user_id');
    return redirect('get-all-session');
});

// get data in blade file

// {{session()->get('user_name')}}