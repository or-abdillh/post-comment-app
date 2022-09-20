<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail post
        </h2>
    </x-slot>
    {{-- Detail card --}}
    <section class="mt-8 mb-5 rounded-xl shadow-md bg-slate-100 border border-gray-300 p-6 max-w-4xl mx-auto">
        <section class="flex items-center gap-3 mb-5">
            {{-- Avatar --}}
            <img width="50" class="border text rounded-full border-gray-300" src="{{ asset('/avatar.jpg') }}" alt="">
            <span>
                <p class="text-gray-700 font-semibold text-lg">Fulanah binti Fulanah</p>
                <small class="font-medium text-gray-600">Posted at 12:00PM</small>
            </span>
        </section>
        <section>
            <p>{{ $data['post']->content }}</p>
        </section>
        <section class="mt-6">
            <form method="POST" action="{{ route('comment.create') }}">
                @csrf
                <section class="flex">
                    <input type="hidden" name="commentable_id" value="{{ $data['post']->id }}">
                    <input type="text" name="body" class="w-10/12 px-3 py-2 border border-gray-400 rounded-tl-xl rounded-bl-xl bg-gray-200" />
                    <button type="submit" class="w-2/12 bg-gray-500 text-gray-100 px-2 py-2 rounded-tr-xl rounded-br-xl">Comment</button>
                </section>
            </form>
        </section>
    </section>
    <section class="max-w-4xl mx-auto bg-gray-100">
        {{-- Comments --}}
        <section class="h-[20rem] overflow-scroll">
            @foreach ($data['comments'] as $comment)
            <section class="mb-3 bg-slate-200 border border-gray-200 px-3 py-3 rounded-xl">
                <small class="text-gray-500">anonim : {{ $comment->created_at->diffforhumans() }}</small>
                <p class="text-gray-600">{{ $comment->body }}</p>
            </section> 
            @endforeach
        </section>
    </section>
</x-app-layout>