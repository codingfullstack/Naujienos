@extends('Layouts.layout')
@section('content')
    <div class=" flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class=" flex justify-start flex-wrap w-full  ">
                @foreach ($posts as $post)
                    <div class="flex mx-1 my-5 ">
                        <div class="rounded-lg shadow-lg bg-white max-w-sm">

                            <div class="p-6">
                                <a href="{{ route('posts.show', [$post->id]) }}">
                                    <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $post->title }}</h5>

                                </a>
                                <p>Created:{{ $post->created_at }}</p>
                                <p>Updated:{{ $post->updated_at }}</p>
                                <div>
                                    <span>Categories:</span>
                                    @foreach ($post->categories as $item)
                                        <div>{{ $item->name }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
