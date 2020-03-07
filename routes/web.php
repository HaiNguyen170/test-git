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
Route::get('/index',[
    'as' =>'article.index',
   'uses'=> 'PageController@index']);


Route::get('/article/create', [
    'as' => 'article.create',
    'uses' => 'ArticleController@create',
]);

Route::post('/article',[
   'as' => 'article.store',
   'uses' => 'ArticleController@store',
]);

Route::get('/article/{id}/edit',[
    'as'=>'article.edit',
    'uses'=>'ArticleController@edit',
]);

Route::put('/article/{id}',[
   'as'=>'article.update',
   'uses'=>'ArticleController@update',
]);

Route::delete('/article/{id}', [
    'as'=>'article.destroy',
    'uses'=>'ArticleController@destroy',
]);
Route::get('/article/{id}',[
      'as'   => 'article.show',
      'uses' =>  'ArticleController@show',
    ]);

Route::get('/article', 'ArticleController@index');

Route::get('/auth/login', [
    'as'=>'auth.login',
    'uses'=>'userController@login',
]);

Route::get('/auth/register', [
    'as'=>'auth.register',
    'uses'=>'userController@register']);


Route::get('/password',function (){
    return view('auth.password');
});
Route::get('/reset', function ()
{
    return view('auth.reset');
});


Route::group(array('prefix' => 'admin'), function() {

    Route::get('login', array('as' => 'admin.login', 'uses' => 'AdminAuthController@getLogin'));
    Route::post('login', array('as' => 'admin.login.post', 'uses' => 'AdminAuthController@postLogin'));
    Route::get('logout', array('as' => 'admin.logout', 'uses' => 'AdminAuthController@getLogout'));
});

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {

    Route::resource('posts', 'AdminPostsController', array('except' => array('show')));
});


Route::get('/', array('as' => 'home', 'uses' => 'PostsController@getIndex'));
Route::get('/posts/{id}', array('as' => 'post', 'uses' => 'PostsController@getPost'))->where('id', '[1-9][0-9]*');
