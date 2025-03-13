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

    public function store(Request $request){
        $validated = $request->validate([
            "content" => ["required", "max:255"]
          ]);
        ToDo::create([
            "content" => $validated["content"],
            "completed" => false
          ]);
          return redirect("/todos");
    }

}


