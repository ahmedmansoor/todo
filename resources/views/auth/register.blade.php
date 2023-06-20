@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center font-semibold text-lg">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="w-full max-w-md mx-auto space-y-5">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('name') border-red-500 @enderror">
                            @error('name')
                                <span class="text-red-500 text-xs mt-2">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('email') border-red-500 @enderror">
                            @error('email')
                                <span class="text-red-500 text-xs mt-2">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                            <input id="password" type="password" name="password" required autocomplete="new-password" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('password') border-red-500 @enderror">
                            @error('password')
                                <span class="text-red-500 text-xs mt-2">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <label for="password-confirm" class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>

                     <p class="text-center my-10">Already have an account?
                        <a href="{{ route('login') }}"class="text-indigo-600 hover:text-blue-900
                        dark:text-indigo-400 focus:outline focus:outline-2 focus:rounded-sm
                        focus:outline-red-500">Log in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
