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

Route::get('/', 'HomeController@index');

Route::match(['get','post'],'/admin', 'AdminController@index')->middleware('auth')->middleware('auth');
Route::match(['get','post'],'/admin/setting', 'AdminController@setting')->middleware('auth')->middleware('auth');

Route::match(['get','post'],'/admin/artikel', 'ArtikelController@artikelAdmin')->middleware('auth');
Route::match(['get','post'],'/admin/artikel/cari', 'ArtikelController@artikelAdminCari')->middleware('auth');
Route::match(['get','post'],'/admin/artikel/editor', 'ArtikelController@tambah')->middleware('auth');
Route::match(['get','post'],'/admin/artikel/del/{id}/{slug}', 'ArtikelController@hapus')->middleware('auth');
Route::match(['get','post'],'/admin/artikel/edit/{id}/{slug}', 'ArtikelController@edit')->middleware('auth');

Route::match(['get','post'],'/admin/alumni', 'AlumniController@admin')->middleware('auth');
Route::match(['get','post'],'/admin/alumni/form', 'AlumniController@tambah')->middleware('auth');
Route::match(['get','post'],'/admin/alumni/edit/{id}/{slug}', 'AlumniController@edit')->middleware('auth');
Route::match(['get','post'],'/admin/alumni/del/{id}/{slug}', 'AlumniController@hapus')->middleware('auth');
Route::match(['get','post'],'/admin/alumni/cari', 'AlumniController@adminCari')->middleware('auth');

Route::match(['get','post'],'/admin/gallery', 'GalleryController@admin')->middleware('auth');
Route::match(['get','post'],'/admin/gallery/form', 'GalleryController@tambah')->middleware('auth');
Route::match(['get','post'],'/admin/gallery/del/{id}/{slug}', 'GalleryController@hapus')->middleware('auth');
Route::match(['get','post'],'/admin/gallery/cari', 'GalleryController@adminCari')->middleware('auth');

Route::match(['get','post'],'/admin/kategori', 'KategoriController@admin')->middleware('auth');
Route::match(['get','post'],'/admin/kategori/edit/{id}/{slug}', 'KategoriController@edit')->middleware('auth');
Route::match(['get','post'],'/admin/kategori/del/{id}/{slug}', 'KategoriController@hapus')->middleware('auth');
Route::match(['get','post'],'/admin/kategori/cari', 'KategoriController@cari')->middleware('auth');

Route::match(['get','post'],'/admin/profile', 'ProfileController@admin')->middleware('auth');
Route::match(['get','post'],'/admin/user', 'ProfileController@management')->middleware('auth');
Route::match(['get','post'],'/admin/user/form', 'ProfileController@tambah')->middleware('auth');
Route::match(['get','post'],'/admin/user/edit/{id}/{slug}', 'ProfileController@edit')->middleware('auth');
Route::match(['get','post'],'/admin/user/del/{id}/{slug}', 'ProfileController@hapus')->middleware('auth');

Route::get('/admin/karya', 'KaryaController@karyaAdmin')->middleware('auth');
Route::match(['get','post'],'/admin/karya/form', 'KaryaController@tambah')->middleware('auth');
Route::match(['get','post'],'/admin/karya/del/{id}/{slug}', 'KaryaController@hapus')->middleware('auth');
Route::match(['get','post'],'/admin/karya/edit/{id}/{slug}', 'KaryaController@edit')->middleware('auth');

Route::match(['get','post'],'/login', ['as' => 'login', 'uses' => 'LoginController@index']);
Route::get('/logout', 'LoginController@logout')->middleware('auth');


Route::get('/artikel', 'ArtikelController@artikel');
Route::get('/artikel/cari', 'ArtikelController@cari');
Route::match(['get','post'],'/artikel/{id}/{slug}', 'ArtikelController@detail');
Route::match(['get','post'],'/kategori/{id}/{slug}', 'KategoriController@detail');

Route::get('/karya', 'KaryaController@index');
Route::get('/karya/{id}/{slug}', 'KaryaController@detail');

Route::get('/alumni', 'AlumniController@index');
Route::get('/gallery', 'GalleryController@index');

Route::get('/kursus', 'HomeController@kursus');
Route::get('/testimoni', 'HomeController@testimoni');
Route::get('/contact', 'HomeController@contact');
Route::get('/android', 'HomeController@android');
Route::get('/web', 'HomeController@web');
Route::get('/administrasi', 'HomeController@administrasi');
Route::get('/desain', 'HomeController@desain');

