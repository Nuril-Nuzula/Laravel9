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
            <h2>Resset Password</h2>
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="mb-3">
                    <label for="" class="form-label">E-mail</label>
                    <input placeholder="Tambahkan email" name="email" type="email" class="form-control" value="{{ old('email', $request->email)}}">
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
                <button type="submit" class="btn btn-primary">Reset Password</button>
            </form>
        </div>
    </div>
</div>
@endsection
