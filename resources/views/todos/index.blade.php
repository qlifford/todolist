@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                        {{-- Session message --}}
                    @if (Session::has('alert-success'))
                        <div class="alert alert-success">
                            {{Session::get('alert-success')}}
                        </div>                        
                    @endif

                    @if (count($todoData) > 0)

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Task</th>
                            <th scope="col">Description</th>
                            <th scope="col">Completed</th>
                            <th scope="col-span-3" class=" text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($todoData as $todo)                            
                            <tr>
                            <th scope="row">1</th>
                            <td>{{$todo->title}}</td>
                            <td>{{$todo->description}}</td>
                            <td>
                                
                            </td>
                            <td class="justify-content-center" style="padding: 8px;">
                                <a href="" class="p-1" style="color: blue;">View</a>
                                <a href="" class="p-1" style="color: rgb(125, 114, 114);">Edit</a>
                                <a href="" class="p-1" style="color: red;" >Delete</a>
                                <form action="">
                                    <input type="hidden" name="todo_id" value="{{$todo->id}}">
                                    <input type="submit" style="float:right;" class="btn btn-info btn-sm">
                                </form>
                                
                            </td>
                            </tr>
                            @endforeach
                        
                        </tbody>
                    </table> 
                    @else
                    <h4>No task created yet</h4>                    
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
