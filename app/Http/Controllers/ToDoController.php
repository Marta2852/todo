<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index(){
        $todos = ToDo::all();
        return view("todos.index", compact("todos"));
    }

    public function show(ToDo $todo){
        return view("todos.show", compact("todo"));
}

    public function store(){
        dd("Metode store izsaukta");
    }

}


