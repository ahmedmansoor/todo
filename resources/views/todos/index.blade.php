@extends('layouts.app')
@include('alerts.flash-messages')

@section('content')
    <div class="container mx-auto px-4 py-10">

        <div class="flex justify-center">
            <form action="{{ route('todos.store') }}" method="post" class="w-full max-w-lg">
                @csrf
                <div class="flex items-center border-b border-blue-500 py-2">
                    <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Add a new task" name="task" aria-label="Task">
                    <button class="flex-shrink-0 bg-blue-500 bg-opacity-10 hover:bg-opacity-20 text-sm text-blue-500 py-1 px-2 rounded-md" type="submit">
                        Add
                    </button>
                </div>
            </form>
        </div>

        @if ($todos->count())
            <ul class="list-group mt-4">
                @foreach ($todos as $todo)
                    <li class="list-group-item flex justify-between">
                        <span class="task-text">{{ $todo->task }}</span>
                        <div>
                            <button class="p-1 rounded-md text-gray-500 bg-gray-100 edit" data-id="{{ $todo->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>
                            </button>
                            <form action="{{ route('todos.destroy', $todo) }}" method="POST" class="inline-block delete-form" data-id="{{ $todo->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-1 rounded-md text-red-500 bg-red-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3h18v18H3zM15 9l-6 6m0-6l6 6"/></svg>
                                </button>
                            </form>
                        </div>
                    </li>
                @endforeach

            </ul>
        @else
            <p class="mt-4">You have no todos yet.</p>
        @endif
    </div>

@include('todos.partials.edit-script')
@endsection
@include('todos.partials.edit')
@include('todos.partials.delete')



