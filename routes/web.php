<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestController;

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
Route::get('my-route', [TestController::class, 'lessonOne']);
Route::get('data', [TestController::class, 'lessonTow']);
Route::get('chrtt', [TestController::class, 'chrt']);
Route::get('name', [TestController::class, 'ivan']);
Route::get('fr', [TestController::class, 'ivan1']);
Route::get('chi', [TestController::class, 'chisla']);
Route::get('chi1', [TestController::class, 'chisla1']);
Route::get('sh', [TestController::class, 'shifr']);
Route::get('template/{detach}', [TestController::class, 'lessonTemplateOne']);
Route::get('One', [TestController::class, 'privacyTemplateOne']);
Route::get('Two', [TestController::class, 'privacyTemplateTwo']);
Route::get('Var', [TestController::class, 'myStringTemplate']);
Route::get('List', [TestController::class, 'arrayListTemplate']);
Route::get('ListTwo', [TestController::class, 'arrayListTemplateTwo']);
Route::get('Number', [TestController::class, 'arrayNumberTemplate']);

