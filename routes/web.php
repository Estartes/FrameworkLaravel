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
    return view('welcome');
});
Route::get('/fio', function ($name = "Базанов Сергей Юрьевич") {
    return $name;
});
Route::get('/friend', function ($name = "Демин Леонид Алексеевич") {
    return $name;
});
Route::get('/get-friend/{login}', function ($login) {
    return 'Логин: '.$login;
});
Route::get('/my-city/{city}', function ($city) {
    return 'Мой город: '.$city;
});
Route::get('/level/{lvl}', function ($lvl) {
    if(($lvl >= 0)&&($lvl <= 25)){
        return "новичок";
    };
    if(($lvl >= 26)&&($lvl <= 50)){
        return "специалист";
    };
    if(($lvl >= 51)&&($lvl <= 75)){
        return "босс";
    };
    if(($lvl >= 76)&&($lvl <= 98)){
        return "старик";
    };
    if($lvl = 99){
        return "король";
    };
});
Route::get('/working/{name}/{date}', function ($name, $date) {

    return 'Название проекта: '.$name.'. Дата: '.$date;
})->where(['date' => '[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])+']);

Route::get('/power/power', function () {
    return '<a href="/test">Узнать путь</a>';
})->name('power');
Route::get('/test', function(){
    return route('power');
});

Route::prefix('admin')->group(function (){
    Route::get('/login', function (){
        return 'логин';
    });
    Route::get('/logout', function (){
        return 'логаут';
    });
    Route::get('/info', function (){
        return 'инфо';
    });
    Route::get('/color', function (){
        return 'цвет';
    });
});

Route::redirect('/admin/web', '/admin/color');

Route::get('/color/{hex}', function ($hex){
    return $hex;
}) -> where('hex', '[0-9a-fA-F]{6}+');
