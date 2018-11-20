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

Route::get('/', 'StaticPagesController@home');
Route::get('/help', 'StaticPagesController@help');
Route::get('/about', 'StaticPagesController@about');


/* 
UsersController：

功能|url|http方法|接口
---|---|---|---
注册|/signup|post|
登陆|/login |post|
退出登陆|/logout|delete|
忘记密码1（验证手机号）|/password_forget|post|
忘记密码2（输入新密码）|/password_reset|post|
*/
Route::post('/signup', 'UsersController@signup')->name('signup');
Route::post('/login','UsersController@login')->name('login');
Route::delete('/logout','UsersController@logout')->name('logout');
Route::post('/password_forget','UsersController@passwdForget')->name('passwdForget');
Route::post('/password_reset','UsersController@passwdReset')->name('passwdReset');

Route::post('/recommend', 'RecommendController@recommend')->name('recommend');

/*
QuestionsController

功能|url|http方法|接口
---|---|---|---
请求问题|/question_request|post|
用户回答完毕，提交答案，后端返回推荐结果|/recommendation|post|
用户返回评价|/record_store|post
*/
