<?php

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

Route::get('/sample', function(){
    return view('sample');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/sample', function(){ //sample
    return view('sample');
}); 


Route::get('/judgesNew', function(){//新規追加　確認
    return view('data.judges');
});
Route::post('/judgesNew', )->name('judges.new');


Route::get('/caseDetail', function(){
    return view('ebina.caseDetail');
});





Route::get('/routecaseIndex', 'CasesIndexController@index');//case一覧投稿について






Route::get('/master', function(){//yieldのサンプル
    return view('sample.master');
});

Route::get('/dashboard', function(){////yieldのサンプル
    return view('sample.dashboard');
});


Route::get('/createJudgment', 'CreateJudgmentController@index');

