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

Route::view('/', 'my.home', ['title' => 'Laravel Easy Example']);

Route::get('/view', function () {return view('my.view', ['title' => 'Laravel']);});

Route::get('/route/{num?}', function ($num=0) {return view('my.route', ['title' => 'Laravel', 'num' => $num]);});

Route::get('/method/{method}', function ($method) {
  return view('my.method', ['title' => 'Laravel', 'method' => $method]);
});

//Route::get('/method', function () {return "get";});
//Route::post('/method', function () {return "post";});
//Route::put('/method', function () {return "put";});
//Route::patch('/method', function () {return "patch";});
//Route::delete('/method', function () {return "delete";});
//Route::options('/method', function () {return "options";});
Route::any('/method', function (Illuminate\Http\Request $req) {return $req->method();});
//Route::match(['get', 'post', 'post', 'patch', 'delete', 'options'], '/method', [MyController::class, 'match']);

Route::get('/user', [MyController::class, 'index']);






