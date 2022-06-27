<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alunosController;
use App\Http\Controllers\treinosController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Site\loginController;
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


Route::get('/',[homeController::class, 'index'])->name('home');

Route::get('/login',[loginController::class, 'index'])->name('login');
Route::post('/login/entrar',[loginController::class, 'entrar'])->name('site.login.entrar');
Route::get('/login/sair',[loginController::class, 'sair'])->name('site.login.sair');


Route::group(['middleware'=>'auth'],function(){

    Route::get('/admin/alunos/',[alunosController::class, 'index'])->name('admin.alunos');
    Route::get('/admin/alunos/criar/',[alunosController::class, 'criar'])->name('admin.alunos.criar');
    Route::get('/admin/alunos/salvar/',[alunosController::class, 'salvar'])->name('admin.alunos.salvar');
    Route::get('/admin/alunos/editar/{id}',[alunosController::class, 'editar'])->name('admin.alunos.editar');
    Route::get('/admin/alunos/atualizar/{id}',[alunosController::class, 'atualizar'])->name('admin.alunos.atualizar');
    Route::get('/admin/alunos/deletar/{id}',[alunosController::class, 'deletar'])->name('admin.alunos.deletar');


    Route::get('/admin/treinos/',[treinosController::class, 'index'])->name('admin.treinos');
    Route::get('/admin/treinos/criar/',[treinosController::class, 'criar'])->name('admin.treinos.criar');
    Route::post('/admin/treinos/salvar/',[treinosController::class, 'salvar'])->name('admin.treinos.salvar');
    Route::get('/admin/treinos/editar/{id}',[treinosController::class, 'editar'])->name('admin.treinos.editar');
    Route::get('/admin/treinos/atualizar/{id}',[treinosController::class, 'atualizar'])->name('admin.treinos.atualizar');
    Route::get('/admin/treinos/deletar/{id}',[treinosController::class, 'deletar'])->name('admin.treinos.deletar');

});

Route::get('{id}',[treinosController::class, 'download'])->name('admin.treinos.download');






