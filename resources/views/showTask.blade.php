@extends('layouts.app')

@section('content')

    @foreach($tasks as $task)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$task->name}}</h5>
                <p class="card-text">{{$task->created_by}}</p>
                <p class="card-text">{{$task->assigned_to}}</p>
                <a href="route('show',$task->id)" class="btn btn-primary">Show Task</a>
            </div>
        </div>

    @endforeach
@endsection
