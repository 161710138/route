<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
	return '<h1>Halo</h1>'
	.'Selamat Datang Di WebApp saya<br>'
	.'Laravel, emang keren. ';
});


Route::get('/about/1', function(){
	return '<h1>ini halaman about 1</h1>';
	
});


Route::get('/about/2', function(){
	return '<h1>ini halaman about 2</h1>';
	
});


Route::get('/about/3', function(){
	return '<h1>ini halaman about 3</h1>';
	
});


Route::get('/about/4', function(){
	return '<h1>ini halaman about 4</h1>';
	
});


Route::get('/about/5', function(){
	return '<h1>ini halaman about 5</h1>';
	
});

Route::get('/kontak', function(){
	return view('kontak');

	
});


Route::get('/profil', function(){
	return view('profil');
	
	
});

//route parameter
Route::get('/about/{page}', function($a){
	return  'ini halaman about <b>' .$a. '</b>';
	
}); 
Route::get('/kantin/{makanan}/{minuman}/{camilan}', function($a,$b,$c){
	return  'Saya pesan makanan <b>' .$a. '</b></br>'
	. 'minumnya <b>' .$b. '</b></br>'
	.  'camilannya <b>' .$c. '</b>';
	
});
	//route optional parameter
Route::get('/user/{name?}', function($name= 'penti'){
	return 'nama saya '.$name;
});




