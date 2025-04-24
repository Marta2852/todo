<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    // Check if the user is logged in
    if (auth()->check()) {
        // Redirect logged-in users to the 'create todo' page
        return redirect('/todos/create');
    }
    // Show the welcome page for guests
    return view('welcome');
});

// "Why" page for guests
Route::get('/why', function () {
    return view('why');
});

// Registration routes
Route::get('register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

// Login routes
Route::get('login', [SessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

// Logout route
Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth')->name('logout');

// Authenticated routes
Route::middleware('auth')->group(function () {
    // ToDo routes
    Route::get('/todos', [ToDoController::class, 'index']);
    Route::get('/todos/create', [ToDoController::class, 'create']);
    Route::get('/todos/{todo}', [ToDoController::class, 'show']);
    Route::post('/todos', [ToDoController::class, 'store']);
    Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit']);
    Route::put('/todos/{todo}', [ToDoController::class, 'update']);
    Route::delete('/todos/{todo}', [ToDoController::class, 'destroy']);
    
    // Diary routes
    Route::get('/diaries', [DiaryController::class, 'index']);
    Route::get('/diaries/create', [DiaryController::class, 'createDiary']);
    Route::get('/diaries/{diary}', [DiaryController::class, 'show']);
    Route::post('/diaries', [DiaryController::class, 'store']);
    Route::get('/diaries/{diary}/edit', [DiaryController::class, 'edit']);
    Route::put('/diaries/{diary}', [DiaryController::class, 'update']);
    Route::delete('/diaries/{diary}', [DiaryController::class, 'destroy']);
});
