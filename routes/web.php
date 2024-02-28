<?php

use App\Http\Controllers\Admin\ExpedienteController;
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
    return view('info.home');
});

Route::get('/servicios', function(){
    return view('info.servicios');
});

Route::get('/reconocimientos', function(){
    return view('info.reconocimientos');
});

Route::get('/oficina', function(){
    return view('info.oficina');
});

Route::get('/contacto', function(){
    return view('info.contacto');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::resource('expedientes', ExpedienteController::class)->names('admin.expedientes');

// Route::resource('Expedientes', ExpedienteController::class)->names('admin.expedientes');

// Route::get('/sistema/index',function(){
//     return view('admin.index');
// });

// Route::get('/sistema/crear',function(){
//     return view('admin.create');
// });

// Route::get('/sistema/modificar',function(){
//     return view('admin.update');
// });

// Route::get('/usuarios/index',function(){
//     return view('users.index');
// });

// Route::get('/usuarios/crear',function(){
//     return view('users.create');
// });
