<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\CreateController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/why', function () {
    return view('why');
});

Route::get('/todos', [ToDoController::class, 'index']);
Route::get('/todos/create', [CreateController::class, 'create']);
Route::get('/todos/{todo}', [ToDoController::class, 'show']);
Route::post('/todos', [ToDoController::class, 'store']);

Route::get('/diaries', [DiaryController::class, 'index']);
Route::get('/diaries/create', [CreateController::class, 'createDiary']);
Route::get('/diaries/{diary}', [DiaryController::class, 'show']);
Route::post('/diaries', [DiaryController::class, 'store']);


