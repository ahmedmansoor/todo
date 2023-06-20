@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center font-semibold text-lg">{{ __('Login') }}</div>

                <div class="card-body">
                  <form method="POST" action="{{ route('login') }}" class="w-full max-w-md mx-auto space-y-8">
                        @csrf
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('email') border-red-500 @enderror">
                            @error('email')
                                <span class="text-red-500 text-xs mt-2">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                            <input id="password" type="password" name="password" required autocomplete="current-password" class="mt-1 block
                            w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500
                            focus:border-indigo-500 sm:text-sm @error('password') border-red-500 @enderror">
                            @error('password')
                                <span class="text-red-500 text-xs mt-2">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="h-4 w-4
                                    text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                    <label for="remember" class="ml-2 block text-sm text-gray-900">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent
                            rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700
                            focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                    <p class="text-center my-10">Don't have an account?
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-indigo-600 hover:text-blue-900
                            dark:text-indigo-400 focus:outline focus:outline-2 focus:rounded-sm
                            focus:outline-red-500">Sign Up</a>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
