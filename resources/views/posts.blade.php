@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-5">

    <!-- New Post Form -->
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <textarea name="content" class="w-full p-2 border rounded mb-2" placeholder="What's on your mind?" required></textarea>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Post</button>
    </form>

    @foreach ($posts as $post)
    <div class="bg-white shadow rounded-lg p-4 mb-5 hover:shadow-lg transition-shadow">
        <div class="flex items-center mb-3">
            <p class="font-semibold text-gray-800">{{ $post->user->name }}</p>
            <p class="text-gray-500 text-sm ml-2">{{ $post->created_at->diffForHumans() }}</p>
        </div>

        <div class="mb-3 text-gray-800 leading-relaxed">
            {{ $post->content }}
        </div>

        @if(Auth::id() === $post->user_id)
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:text-red-700 text-sm">Delete</button>
        </form>
        @endif
    </div>
    @endforeach
</div>
@endsection
