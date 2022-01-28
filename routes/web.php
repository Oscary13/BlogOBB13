<?php

use Illuminate\Support\Facades\Route;
use App\Models\Frases;
use App\Models\User;

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

// Route::get('/saludo', function () {
//     return view('welcome');
// });

// Route::get('/inicio', function () {
//     $nombre = "Emmanuel";
//     $apellido = "Torres";
//     $elementos = [1,2,"Emmanuel",true,"gato","perro"];
//     return view('inicio',["nombre" => $nombre, "apellido" => $apellido,"elementos" => $elementos]);
// })->name('inicio');

// Route::get('/adios', function () {
//     echo "Hola mundo";
//     return view('despedida');
// })->name('perro');
Route::get('/', function () {
    $frases = new Frases();
    $frases->frase1 ="La música es un mundo increíble y la vida es un suspiro, basta verla diferente, pa' que ya sea mejor";
    return view('templete.index', ['frases'=> $frases]);
});
Route::get('/inicio', function () {
    // $categoria = new User();
    // $categoria->nombre = 'Categoria1';
    // $categoria->codigo = 'Cat1';
    // $categoria->descripcion = 'Descripcion 1';
    //return view('templete.index',['categoria' => $categoria]);

    $frases = new Frases();
    $frases->frase1 ="La música es un mundo increíble y la vida es un suspiro, basta verla diferente, pa' que ya sea mejor";
    return view('templete.index', ['frases'=> $frases]);
})->name('inicio');