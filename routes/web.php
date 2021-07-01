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
//    return view('welcome');
    return 'Hello, World!';
//    return view('about');
});

Route::get('/csrf', function () {
    return csrf_token();
});

Route::match(['post'],'/post', function () {
    return 'POST';
});

Route::get('/users/{id?}',function ($id='fallbackId'){
    return 'Your ID is '.$id;
});

Route::get('/tasks', [\App\Http\Controllers\TasksController::class,'index']);

Route::resource('/resource', '\App\Http\Controllers\MyResourceController');

Route::apiResource('/api','\App\Http\Controllers\MyApiController');

Route::get('/singleAction', '\App\Http\Controllers\MySingleActionController');

Route::any('/abort', function (\Illuminate\Http\Request $request) {
    abort(403, 'You cannot do that!');
});

// Custom responses
Route::get('/custom/make', '\App\Http\Controllers\MyCustomController@make');
Route::get('/custom/json', '\App\Http\Controllers\MyCustomController@json');
