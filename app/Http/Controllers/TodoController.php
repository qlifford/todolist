<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todoData = Todo::all();
        return view('todos.index',compact('todoData'));
    }
    public function create()
    {
        return view(('todos.create'));
    }
    public function edit()
    {
        return view('todos.edit');
    }
    public function store(TodoRequest $request)
    {
        // $request->validated();
        Todo::create([        
        'title' => $request->title,
        'description' => $request->description,
    
    ]);
    $request->session()->flash('alert-success', 'Task created successfully');
    return to_route('index');


        // return redirect()->back();
    }
}
