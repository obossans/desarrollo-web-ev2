<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProyectoController;
use App\Models\proyectoModel;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('landing.index');
})->name('raiz');

Route::get('/login', [UserController::class, 'formularioLogin'])->name('usuario.login');
Route::post('/login', [UserController::class, 'login'])->name('usuario.validar');

Route::post('/logout', [UserController::class, 'logout'])->name('usuario.logout');

Route::get('/users/register', [UserController::class, 'formularioNuevo'])->name('usuario.registrar');
Route::post('/users/register', [UserController::class, 'registrar'])->name('usuario.registrar');

Route::get('/backoffice', function(){
    $user = Auth::user();
    if($user == NULL){
        return redirect()->route('usuario.login')->withErrors(['message' => 'No existe una sesion activa']);
    }
    return view('backoffice.dashboard', ['user' => $user]);
})->name('backoffice.dashboard');

/* Route::get('/posts', [ProyectoController::class, 'index']);

Route::get('/posts/crear', [ProyectoController::class, 'create']);

Route::post('/posts', [ProyectoController::class, 'store']);

Route::get('/posts/{id}', [ProyectoController::class, 'show']);

Route::get('/posts/{post}/edit', [ProyectoController::class, 'edit']);

Route::get('/uf', [ProyectoController::class, 'showUf']);

Route::put('/posts/{post}', [ProyectoController::class, 'update']);

Route::delete('/posts/{post}', [ProyectoController::class, 'destroy']); */
