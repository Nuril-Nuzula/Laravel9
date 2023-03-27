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
            <h2>Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
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
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
