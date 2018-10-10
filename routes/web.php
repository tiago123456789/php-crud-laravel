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

Route::get("/contacts", "ContactController@index")->name("contact.list");
Route::get("/contacts/delete/{id}", "ContactController@delete")->name("contact.delete");
Route::get("/contacts/editar/{id}", "ContactController@editar")->name("contact.edit");
Route::post("/contacts/editar/{id}", "ContactController@update")->name("contact.edit");
Route::get("/contacts/novo", "ContactController@novo")->name("contact.novo");
Route::post("/contacts/novo", "ContactController@salvar")->name("contact.novo");

