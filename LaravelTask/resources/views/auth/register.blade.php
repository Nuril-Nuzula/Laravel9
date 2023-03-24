@extends('layouts.app')

@section('main')
<div class="mt-5 mx-auto" style="width: 380px">
    <!-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif -->
    <div class="card">
        <div class="card-body">
            <h2>Add Data</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input placeholder="Tambahkan Nama" name="name" type="text" class="form-control" value="{{ old('name')}}">
                    @error('name')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">E-mail</label>
                    <input placeholder="Tambahkan email" name="email" type="email" class="form-control" value="{{ old('email')}}">
                    @error('email')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input placeholder="Tambahkan Password" name="password" type="password" class="form-control" value="{{ old('password')}}">
                    @error('password')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Confirm Password</label>
                    <input placeholder="Confirm Password" name="password_confirmation" type="password" class="form-control" >
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection
