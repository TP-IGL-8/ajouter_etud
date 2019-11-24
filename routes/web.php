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

/*Route::get('/contact', function(){
    echo "tst";
});

Route::get('/contact/{name}', 'TestController@contact');

/*Route::get('/contact/{name}', function($name){
    echo "tst ". $name;
});

Route::get('/contact/{name}/numero/{id}', function($name,$id){
    echo "tst ". $name . " - ". $id;
})->where(['name'=>'[a-zA-Z]+','id'=>'[0-9]+']);
*/
Route::get('/contact','ContactController@newContact');
Route::get('/contacts','ContactController@listContact');
Auth::routes();  


Route::get('/etudiant','EtudiantController@newEtudiant');
Route::get('/etudiants','EtudiantController@listEtudiant');
Route::get('/create','EtudiantController@create');

Route::get('/store2','EtudiantController@store');
Route::get('/index','EtudiantController@index');

//Route::get('/store','EtudiantController@store');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('acceuil',function(){
    return view('acceuil');
});