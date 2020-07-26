@extends('layouts.app')

@section('content')

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$task->name}}</h5>
            <p class="card-text">{{$task->created_by}}</p>
            <p class="card-text">{{$task->assigned_to}}</p>
            <a href="route('delete',$task->id)" class="btn btn-primary">Delete Task</a>
        </div>
    </div>


@endsection
