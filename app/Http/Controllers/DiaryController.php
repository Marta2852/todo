<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index()
    {
        // Get the authenticated user's diaries
        $diaries = auth()->user()->diaries;
        return view("diaries.index", compact("diaries"));
    }

    public function show(Diary $diary)
    {
        // Ensure that the diary belongs to the logged-in user
        if ($diary->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        return view("diaries.show", compact("diary"));
    }

    public function createDiary()
    {
        return view('diaries.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            "title" => ["required", "max:255"],
            "body" => ["required"],
            "date" => ["required", "date"]
        ]);

        // Create the diary entry and associate it with the logged-in user
        auth()->user()->diaries()->create([
            'title' => $validated['title'],
            'body' => $validated['body'],
            'date' => $validated['date'],
        ]);

        return redirect("/diaries");
    }

    public function edit(Diary $diary)
    {
        // Ensure that the diary belongs to the logged-in user
        if ($diary->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        return view("diaries.edit", compact("diary"));
    }

    public function update(Request $request, Diary $diary)
    {
        // Ensure that the diary belongs to the logged-in user
        if ($diary->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        // Validate the request
        $validated = $request->validate([
            "title" => ["required", "max:255"],
            "body" => ["required"],
            "date" => ["required", "date"],
        ]);

        // Update the diary entry
        $diary->update([
            'title' => $validated['title'],
            'body' => $validated['body'],
            'date' => $validated['date'],
        ]);

        return redirect('/diaries');
    }

    public function destroy(Diary $diary)
    {
        // Ensure that the diary belongs to the logged-in user
        if ($diary->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        // Delete the diary entry
        $diary->delete();
        return redirect("/diaries");
    }
}
