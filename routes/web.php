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
    $schedules = App\Schedule::get();

    if($schedules){
        for ($i=0; $i < count($schedules); $i++) { 
            $schedules[$i]->hour_start = substr($schedules[$i]->hour_start,0,5);
            $schedules[$i]->hour_end = substr($schedules[$i]->hour_end,0,5);
        }
    }

    $news = App\News::orderBy('updated_at','desc')->limit(1)->get();

    $sermons = App\Sermon::where('status',1)
                ->orderBy('created_at', 'desc')
                ->limit(3)
                ->get();

    return view('welcome',[
        'schedules' => $schedules,
        'news' => $news[0],
        'sermons' => $sermons
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/schedule', 'ScheduleController@index')->name('schedule');

Route::get('/news', 'NewsController@index')->name('news');

Route::get('/sermon', 'SermonController@index')->name('sermon');

Route::get('/galleries', 'GalleryController@index')->name('galleries');
