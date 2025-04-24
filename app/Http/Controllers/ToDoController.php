<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index()
    {
        // Get the authenticated user's todos
        $todos = auth()->user()->toDos;
        return view("todos.index", compact("todos"));
    }

    public function show(ToDo $todo)
    {
        // Ensure that the todo belongs to the logged-in user
        if ($todo->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        return view("todos.show", compact("todo"));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            "content" => ["required", "max:255"]
        ]);

        // Create the todo and associate it with the logged-in user
        auth()->user()->toDos()->create([
            "content" => $validated["content"],
            "completed" => false
        ]);

        return redirect("/todos");
    }

    public function edit(ToDo $todo)
    {
        // Ensure that the todo belongs to the logged-in user
        if ($todo->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        return view("todos.edit", compact("todo"));
    }

    public function update(Request $request, ToDo $todo)
    {
        // Ensure that the todo belongs to the logged-in user
        if ($todo->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        // Validate the request
        $validated = $request->validate([
            'content' => 'required|max:255',
            "completed" => ["boolean"]
        ]);

        // Update the todo item
        $todo->update([
            'content' => $validated["content"],
            'completed' => $validated["completed"]
        ]);
        
        return redirect('/todos');
    }

    public function destroy(ToDo $todo)
    {
        // Ensure that the todo belongs to the logged-in user
        if ($todo->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        // Delete the todo item
        $todo->delete();
        return redirect("/todos");
    }
}
