@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post"  action="{{route(' ')}}" id="createForm">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Task name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Task name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Created By</label>
            <input type="text"  name="createBy" class="form-control" id="exampleInputPassword1" placeholder="Created By">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Assigned to</label>
            <input type="text" name="assignedTo" class="form-control" id="exampleInputPassword1" placeholder="Assigned to">
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>

@endsection
