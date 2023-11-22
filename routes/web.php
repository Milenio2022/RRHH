<?php

use App\Http\Controllers\CambioContraseñaController;
use App\Mail\CambioContraseñaMailable;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupervisorController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
})->name('/')->middleware('guest');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('index');
    });



    Route::resource('empleado', EmpleadosController::class);
    Route::get('empleados', [EmpleadosController::class, 'ver_empleados'])->name('ver_empleados');

    Route::resource('cargo', CargoController::class);
    Route::get('cargos', [CargoController::class, 'ver_cargos'])->name('ver_cargos');

    Route::resource('departamento', DepartamentoController::class);
    Route::get('departamentos', [DepartamentoController::class, 'ver_departamentos'])->name('ver_departamentos');

    Route::resource('supervisor', SupervisorController::class);
    Route::get('supervisores', [SupervisorController::class, 'ver_supervisores'])->name('ver_supervisores');

});


Route::post('login', [LoginController::class, 'login'])->name('login');

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('cambiar_contrasena', CambioContraseñaController::class);


Route::post('codigo_verificacion', [CambioContraseñaController::class, 'codigo_verificacion'])->name('codigo_verificacion');

Route::get('/verificar_codigo', [CambioContraseñaController::class, 'verificarCodigo'])->name('verificar_codigo');
Route::post('/verificar_codigo', [CambioContraseñaController::class, 'validarCodigo'])->name('validar_codigo');
Route::post('/confirmar_contrasena', [CambioContraseñaController::class, 'confirmar_contrasena'])->name('confirmar_contrasena');

// Route::get('cambio_contrasena', function(){
//     Mail::to('sebasfer2504@gmail.com')->send(new CambioContraseñaMailable);

//     return 'Mensaje Enviado';
// });




// Route::get('/dashboard', function () {
//     return view('index');
// })->middleware(['auth'])->name('dashboard'); //})->middleware(['auth', 'verified'])->name('dashboard'); 'verified'->enviar correos para verificar

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
