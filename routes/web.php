<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

// Home page route
Route::get('/', function () {
    return view('welcome');
});

// Why page route (accessible by everyone)
Route::get('/why', function () {
    return view('why');
});

// Authentication routes
Route::get('register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth')->name('logout');

// Todo and Diary routes (only accessible by authenticated users)
Route::middleware('auth')->group(function () {
    Route::get('/todos', [ToDoController::class, 'index']);
    Route::get('/todos/create', [ToDoController::class, 'create']);
    Route::get('/todos/{todo}', [ToDoController::class, 'show']);
    Route::post('/todos', [ToDoController::class, 'store']);
    Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit']);
    Route::put('/todos/{todo}', [ToDoController::class, 'update']);
    Route::delete('/todos/{todo}', [ToDoController::class, 'destroy']);
    
    Route::get('/diaries', [DiaryController::class, 'index']);
    Route::get('/diaries/create', [DiaryController::class, 'createDiary']);
    Route::get('/diaries/{diary}', [DiaryController::class, 'show']);
    Route::post('/diaries', [DiaryController::class, 'store']);
    Route::get('/diaries/{diary}/edit', [DiaryController::class, 'edit']);
    Route::put('/diaries/{diary}', [DiaryController::class, 'update']);
    Route::delete('/diaries/{diary}', [DiaryController::class, 'destroy']);
});


