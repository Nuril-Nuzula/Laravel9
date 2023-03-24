@extends('layouts.app')

@section('main')
<div class="mt-5 mx-auto" style="width: 380px">
@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h2>Edit Data</h2>
            <form action="{{url("tasks/$task->id")}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="" class="form-label">Time</label>
                    <input name="time" value="{{$task->time}}" type="text" class="form-control" value="{{ old('time', $task->time) }}">
                    @error('time')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Task</label>
                    <input name="tasks" value="{{$task->tasks}}" class="form-control" id="" rows="3" value="{{ old('tasks', $task->tasks) }}">
                    @error('tasks')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection