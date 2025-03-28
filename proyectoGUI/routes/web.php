
<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Pagina principal
Route::view('/', 'components.main')->name('main'); //carga el componente por defecto
