@extends('layouts.app')
@section( 'content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <input id="email" class="form-control" placeholder="Email Address" type="email" name="email" :value="old('email')" required autofocus />
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <input id="password" class="form-control"type="password" placeholder="Password" name="password" required autocomplete="current-password" />
    </div>
    <div class="form-group d-flex justify-content-between">
        <div class="custom-control custom-checkbox">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </div>
        @if (Route::has('password.request'))
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
    @endif
    </div>
    <button class="btn btn-primary btn-block">Log In</button>
    <hr>
    <p class="text-muted">Login with your social media account.</p>
    <ul class="list-inline">
        <li class="list-inline-item">
            <a href="#" class="btn btn-floating btn-facebook">
                <i class="fa fa-facebook"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" class="btn btn-floating btn-twitter">
                <i class="fa fa-twitter"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" class="btn btn-floating btn-linkedin">
                <i class="fa fa-linkedin"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" class="btn btn-floating btn-google">
                <i class="fa fa-google"></i>
            </a>
        </li>
    
    </ul>
    <hr>
    <p class="text-muted">Don't have an account?</p>
    <a href="{{route('register')}}" class="btn btn-outline-light btn-sm">Register now!</a>
</form>
@endsection

