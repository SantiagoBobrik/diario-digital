<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
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





/* --------------------------- SECTION PANEL ADMIN -------------------------- */

Route::get('/dashboard', function () {

    return redirect('/dashboard/noticias');
})->middleware('auth');

Route::get('/dashboard/noticias', 'DashboardController@getAllPost')->middleware('auth');


Route::get('/dashboard/noticias/agregar', 'PostController@viewAddPost')->middleware('auth');
Route::post('/dashboard/noticias/agregar', 'PostController@addPost')->middleware('auth');
Route::post('/dashboard/noticias/eliminar', 'PostController@deletePost')->middleware('auth');
Route::get('/dashboard/noticias/editar/{id}', 'PostController@editPost')->middleware('auth');
Route::post('/dashboard/noticias/editarNoticia', 'PostController@updatePost')->middleware('auth');



Route::get('/dashboard/anuncios', 'DashboardController@getAllAds')->middleware('auth');




Route::get('/dashboard/anuncios/agregar', function () {

    return view('adm-ad-add');
})->middleware('auth');

Route::post('/dashboard/anuncios/agregar', 'AdController@addAd')->middleware('auth');

Route::get('/dashboard/anuncios/editar/{id}', 'AdController@editAd')->middleware('auth');
Route::post('/dashboard/anuncios/editarAnuncio', 'AdController@updateAd')->middleware('auth');
Route::post('/dashboard/anuncios/eliminar', 'AdController@deleteAd')->middleware('auth');



Route::get('/dashboard/categoria', 'DashboardController@getAllCategories')->middleware('auth');
Route::post('/dashboard/categoria/agregar', 'CategoryController@addCategory')->middleware('auth');
Route::get('/dashboard/categoria/agregar', function () {

    return view('adm-add-category');
})->middleware('auth');

/* ------------------------- END SECTION PANEL ADMIN ------------------------ */
// Route::get('/pepe', function () {

//     $user = new App\User();
//     $user->password = Hash::make('7177d5714199de8e');
//     $user->email = 'informacion@informacion.com';
//     $user->name = 'Admin';
//     $user->save();
// });


//Auth::routes();
Auth::routes(['register' => false]);

Route::get('/noticia/{id}', 'PostController@postDetail');

Route::get('/busqueda', 'PostController@search');
Route::post('/busqueda', 'PostController@search');



Route::get('/seccion/{slug}', 'CategoryController@getCategory');



Route::get('/', 'HomeController@home');
