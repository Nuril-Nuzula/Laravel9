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
            <h2>Add Data</h2>
            <form action="{{url('/tasks')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Time</label>
                    <input placeholder="Tambahkan Nama" name="time" type="text" class="form-control" value="{{ old('time')}}">
                    @error('time')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Task</label>
                    <input placeholder="Tambahkan Task" name="task" class="form-control" id="" rows="3" value="{{ old('tasks' )}}">
                    @error('task')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection