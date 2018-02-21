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
//calling function home from ContentsController
Route::get('/', 'ContentsController@home')->name('home');
Route::get('/clients', 'ClientController@index')->name('clients');
Route::get('/clients/new', 'ClientController@newClient')->name('new_client');
Route::post('/clients/new', 'ClientController@create')->name('create_client');
Route::get('/clients/{client_id}', 'ClientController@show')->name('show_client');
Route::post('/clients/{client_id}', 'ClientController@modify')->name('update_client');

Route::get('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_available_room');
Route::post('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('update_available_rooms');

Route::get('/book/room/{client_id}/{room_id}/{date_in}/{date_out}', 'ReservationsController@bookRoom')->name('book_room');

/*Route::get('/', function () {
	return '<h3>Care App Page</h3>';
    //return view('welcome');
});*/
Route::get('/about', function () {

	$response_arr = [];
	$response_arr['author'] = 'BP';
	$response_arr['version'] = '0.1.1';
	$response_arr['author'] = 'P';
	$response_arr['author'] = 'Pv';
	return $response_arr;
});
Route::get('/home', function () {
	//create array and pass to view
	$data = [];
	$data['version']='1.0';
// pass data to view
	return view('welcome', $data);
    
});
// call ClientController and method di
//call di
Route::get('/di','ClientController@di');
Route::get('/facades/db', function () {
	return DB::select('SELECT * from table');
	//return DB::socket_select(read, write, except, tv_sec)
});
Route::get('/facades/encrypt', function () {
	return Crypt::encrypt('123456789');
	
});
Route::get('/facades/decrypt', function () {
	return Crypt::decrypt('eyJpdiI6IkJyV2krbFFhSjJxV2ozaE1SdUtlTHc9PSIsInZhbHVlIjoiVzZEaDFWVWtuS0cyQmNwTVNaWnFmaVZUM1hUME1JU2w3MHI0UVduYzB2QT0iLCJtYWMiOiI5Zjk2Y2UyMTM5ZjVmY2Y4OTVmYWY4MTM4M2MyMWU1M2ZlZjFhN2ZmYTUxNTQyNTc3ODJjYmNhYmJkOGQ4YjRhIn0=');
	
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/generate/password', function(){ return bcrypt('123456789'); } );