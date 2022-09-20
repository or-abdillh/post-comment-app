<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Posts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    All posts available
                </div>
            </div>
        </div>
    </div>
    <!-- List all post -->
    <section class="max-w-6xl mx-auto flex flex-wrap justify-between gap-3">
        @foreach ($data['posts'] as $post)
            <section class="bg-slate-100 shadow mb-5 w-[48%] border border-gray-300 p-5 rounded-xl">
                {{-- Card --}}
                <section class="flex items-center gap-3">
                    {{-- Avatar --}}
                    <img width="50" class="border text rounded-full border-gray-300" src="{{ asset('/avatar.jpg') }}" alt="">
                    <span>
                        <p class="text-gray-700 font-semibold text-lg">Fulanah binti Fulanah</p>
                        <small class="font-medium text-gray-600">Posted at 12:00PM</small>
                    </span>
                </section>
                {{-- Content --}}
                <section class="mt-4">
                    <p class="font-medium text-gray-700">{{ $post->title }}</p>
                    <p class="text-gray-700 mb-3">{{ Str::limit($post->content, 50, '...') }}</p>
                    <a class="text-blue-600" href="{{ route('post.detail', $post->id) }}">Read more</a>
                </section>
            </section>
        @endforeach
    </section>
</x-app-layout>
