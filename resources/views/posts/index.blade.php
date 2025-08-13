<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Posts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <!-- Post form -->
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <textarea name="content" rows="3" class="w-full border rounded p-2" placeholder="What's on your mind?" required></textarea>
                    <button type="submit" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded">Post</button>
                </form>

                <hr class="my-4">

                <!-- List of posts -->
                @foreach($posts as $post)
                    <div class="border-b py-2">
                        <p>{{ $post->content }}</p>
                        @if($post->user_id === auth()->id())
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="mt-1">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded">Delete</button>
                            </form>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
