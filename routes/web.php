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

Route::get('/', 'XcxController@index');
//Route::resource('project','PostsController');
//Route::get('/user/register','UsersController@register');
//Route::post('/user/register','UsersController@store');
//Route::get('/user/testmail','UsersController@send');
//
Route::get('index','NewprojectController@testdb');
Route::get('/login', 'UserController@login')->name('login');
//Route::get('xcx_index',"XcxController@index");
Route::group(['prefix'=>'xcx'],function (){
    Route::get('index','XcxController@index');
    Route::get('test','XcxController@test');
});
//Route::group(['prefix'=>'api/v1'],function (){
//
//    Route::resource('lessons','LessonsController');
//});
//
Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');


//$api=app('Dingo\Api\Routing\Router');
//$api->version('v1',function ($api){
//
//    $api->group(['namespace'=>'App\Api\Controllers'],function ($api){
//
//        $api->post('user/login','AuthController@authenticate');
//        $api->post('user/register','AuthController@register ');
//        $api->get('user/me','AuthController@getAuthenticatedUser');
//       $api->group(['middleware'=>'jwt.auth'],function ($api){
//           $api->get('lessons','LessonsController@index');
//           $api->get('lessons/{id}','LessonsController@show');
//
//       });
//    });
//});

