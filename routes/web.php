<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(TaskController::class)->group(function () {
    Route::get('/getTasks', 'getTasks')->name('getTasks');
    Route::post('/addTask', 'addTask')->name('addTask');
    Route::put('/updateTask/{task}', 'updateTask')->name('updateTask');
    Route::delete('/deleteTask/{task}', 'deleteTask')->name('deleteTask');
});
