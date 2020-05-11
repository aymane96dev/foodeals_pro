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

Route::get('/','CommandController@getcities');
Route::get('/graphe', function () {
    return view('statistiques');
});

Route::get('/gettable','CommandController@gettable');
Route::get('/gettotcat','CommandController@getcat');
Route::get('/getpar/{id}','CommandController@getpar');
Route::get('/getproduits/{id}/{i}','CommandController@getproduits');
Route::get('/getplatspartenaires','CommandController@getplatspartenaires');
Route::get('/getpltspartsfiltre/{id}/{i}','CommandController@getpltsparts');
Route::get('/getrevsrest/{id}/{i}','CommandController@getrevsrest');
Route::get('/getrevsrestfirst','CommandController@getrevsrestfirst');
Route::get('/getinfos','CommandController@getinfos');
Route::get('/getprdsbyday/{id}','CommandController@getprdsbyday');
Route::get('/getpltspartsperday/{id}','CommandController@getpltspartsperday');
Route::get('/getrevsrestperday/{id}','CommandController@getrevsrestperday');
Route::get('/gettabinfos','CommandController@gettabinfos');
Route::get('/getcatfirst','DashBoard2Controller@getcatfirst');
Route::get('/getcatproduits/{id}/{i}','DashBoard2Controller@getcatproduits');
Route::get('/getcatproduitsperday/{id}','DashBoard2Controller@getcatproduitsperday');
Route::get('/gettotalcommandes/{id}/{i}','DashBoard2Controller@gettotalcommandes');
Route::get('/getdashboard2','DashBoard2Controller@getplat');
Route::get('/getcmmdsperday/{id}','DashBoard2Controller@getcmmdsperday');
Route::get('/getcltscmmdsfirst','DashBoard2Controller@getcltscmmdsfirst');
Route::get('/getcltscmmds/{id}/{i}','DashBoard2Controller@getcltscmmds');
Route::get('/getcltscmmdsperday/{id}','DashBoard2Controller@getcltscmmdsperday');
Route::get('/getclientscommandesperday/{id}','DashBoard2Controller@getclientscommandesperday');
Route::get('/getsommemens/{id}/{i}','DashBoard2Controller@getsommemens');
Route::get('/getsommemensperday/{id}','DashBoard2Controller@getsommemensperday');
Route::get('/getcmmdsmonthfirst','DashBoard2Controller@getcmmdsmonthfirst');
Route::get('/getsommemensfirst','DashBoard2Controller@getsommemensfirst');
Route::get('/getclientscommandes/{id}/{i}','DashBoard2Controller@getclientscommandes');
Route::get('/getintprixfirst','DashBoard3Controller@getintprixfirst');
Route::get('/getintprix/{id}/{i}','DashBoard3Controller@getintprix');
Route::get('/getintprixperday/{id}','DashBoard3Controller@getintprixperday');
Route::get('/getdashboard3','DashBoard3Controller@getview');
Route::get('/getmodalitefirst','DashBoard3Controller@getmodalitefirst');
Route::get('/getmodalite/{id}/{i}','DashBoard3Controller@getmodalite');
Route::get('/getmodaliteperday/{id}','DashBoard3Controller@getmodaliteperday');
Route::get('/getformnotifs','NotifsController@getform');
Route::post('/getinfosnotifs','NotifsController@getinfos');
