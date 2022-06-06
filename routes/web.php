<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

//подключаем контроллер (все)
//Route::get('/',[App\Http\Controllers\IndexControllers::class, 'getIndex']); - можно так (пуить на прямую)
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

Route::get('/', [Controllers\IndexControllers::class, 'getIndex']);
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Auth::routes();


Route::controller(App\Http\Controllers\HomeController::class)->prefix('home')->group(function () {
    Route::post('/', 'postIndex');
    Route::get('/', 'index')->name('home');
    Route::post('{arcticle}/edit', 'postEdit');
    Route::get('{arcticle}/edit', 'getEdit');
    Route::get('{arcticle}/delete', 'getDelete');
    Route::get('{arcticle}/delete_image', 'getDeleteImage');

});

Route::get('categors/{id}', [Controllers\CategoriesController::class, 'getIndex']);
Route::get('/', [Controllers\IndexControllers::class, 'getIndex']);
Route::controller(Controllers\AjaxController::class)->prefix('ajax')->group(function(){
    Route::post('catalog', 'postCatalog');
    Route::post('maintext', 'postMaintext');
});

Route::controller(App\Http\Controllers\ProductController::class)->prefix('product')->group(function () {
    Route::get('all', 'getAll');
    Route::get('vip', 'getVip');
    Route::get('/category/{category}', 'getCategory');
    Route::get("{product}", 'getOne')->where(['product' => '[0-9]+']);
});


Route::controller(Controllers\MaintextController::class)->group(function () { //все маршруты что будут находится тут будут относится к MaintextController
    Route::get('{maintext}', 'getIndex')->where('maintext', '[0-9]+');
    Route::post('/', 'postIndex')->prefix('maintext');
    Route::get('{URL}', 'getURL');
});





