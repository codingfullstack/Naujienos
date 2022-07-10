@extends('Layouts.layout')
@section('content')
<div class="py-12 ">
    {{-- {{$post}} --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8  rounded-lg shadow-lg ">
@foreach ($post as $post )
            <div class="w-full ">
                <div class="p-6">
                    <h3 class="text-gray-900  font-bold uppercase mb-2">{{$post->title }}</h3>
                   <h6 class="inline">Categories:</h6>
                    @foreach ($post->categories as $cat )
                   <samp class="text-gray-400 inline">{{$cat->name}}</samp>
                    @endforeach
                    <p class="text-gray-700 text-base mb-4">
                        {{ $post->text }}
                    </p>
                </div>
                <h2>Comments:</h2>
                @livewire('comments.comment', ['post'=>$post])
                @livewire('comments.comment-create', ['post'=>$post])
            </div>
        </div>
        @endforeach
    </div>
@endsection
