<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Pagina principal
Route::view('/', 'components.trend')->name('trend'); //carga el componente por defecto
Route::view('/men', 'components.men')->name('men');
Route::view('/women', 'components.women')->name('women');
Route::view('/kids', 'components.kids')->name('kids');
Route::view('/offers', 'components.offers')->name('offers');

// Men
Route::view('/men', 'components.subcomponents.men.principal')->name('menPrincipal');
Route::view('/men/accesories', 'components.subcomponents.men.accesories')->name('menAccesories');
Route::view('/men/clothing', 'components.subcomponents.men.clothing')->name('menClothing');
Route::view('/men/shoes', 'components.subcomponents.men.shoes')->name('menShoes');

// Women
Route::view('/women', 'components.subcomponents.women.principal')->name('womenPrincipal');
Route::view('/women/accesories', 'components.subcomponents.women.accesories')->name('womenAccesories');
Route::view('/women/clothing', 'components.subcomponents.women.clothing')->name('womenClothing');
Route::view('/women/shoes', 'components.subcomponents.women.shoes')->name('womenShoes');

// Kids
Route::view('/kids', 'components.subcomponents.kids.principal')->name('kidPrincipal');
Route::view('/kids/accesories', 'components.subcomponents.kids.accesories')->name('kidAccesories');
Route::view('/kids/clothing', 'components.subcomponents.kids.clothing')->name('kidClothing');
Route::view('/kids/shoes', 'components.subcomponents.kids.shoes')->name('kidShoes');

// Offers
Route::view('/offers', 'components.subcomponents.offers.principal')->name('offersPrincipal');
Route::view('/offers/accesories', 'components.subcomponents.offers.accesories')->name('offersAccesories');
Route::view('/offers/clothing', 'components.subcomponents.offers.clothing')->name('offersClothing');
Route::view('/offers/shoes', 'components.subcomponents.offers.shoes')->name('offersShoes');
