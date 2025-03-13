<?php

namespace App\Http\Controllers;
use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index(){
        $diaries = Diary::all();
        return view("diaries.index", compact("diaries"));
    }

    public function show(Diary $diary){
        return view("diaries.show", compact("diary"));
}

public function createDiary()
    {
        return view('diaries.create');
    }

public function store(Request $request){
    $validated = $request->validate([
        "title" => ["required", "max:255"],
        "body" => ["required"],
        "date" => ["required", "date"]
      ]);
    ToDo::create([
        "title" => $validated["title"],
        "body" => $validated["body"],
        "date" => $validated["date"],
        "completed" => false
      ]);
      return redirect("/diaries");
}
}
