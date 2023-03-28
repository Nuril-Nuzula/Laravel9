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
            <h2>Verification Email</h2>
            @if (session('status'))
            <div class="alert alert-success">
                A fresh Verification link has been sent to your email
            </div>
            @endif
            
            Before proceeding, please check your email for verification.
            Or <form class="d-inline" action="{{ route('verification.email') }}" method="POST">
                @csrf
                
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another verification link') }} </button>
                .
            </form>
        </div>
    </div>
</div>
@endsection
