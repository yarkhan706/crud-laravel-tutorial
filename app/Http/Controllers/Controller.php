<?php

namespace App\Http\Controllers;

use App\Models\Todo;

abstract class Controller
{
    public function index(){
        $todo = Todo::all();
        return view('welcome',['todos' => $todo]);
    }

    public function store(){
        $attribute = request()->validate([
            "title" => "required",
            "description" => "nullable"
        ]);

       Todo::create($attribute);
        return redirect('/');
    }

    public function update(Todo $todo){
       $todo->update(['isDone'=> true]);
        return redirect('/');
    }

    public function destroy(Todo $todo){
        $todo->delete();
        return redirect('/');
    }
}
