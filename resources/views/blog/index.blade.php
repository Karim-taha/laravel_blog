
@extends('layouts.app')

@section('content')


    <div class="container m-auto text-center pt-15 pb-5">
        <h1 class="text-6xl font-bold">All Posts</h1>
    </div>

    <!-- Post Section -->
    @foreach ($posts as $post)
    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300">
        <div class="flex">
            <img class="object-cover" src="{{$post->image_path}}" alt="" srcset="">
        </div>

        <div>
            <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">{{$post->title}}</h2>
            <span>By: <span class="text-gray-500 italic">{{$post->user->name}}</span></span>
            <span>On: <span class="text-gray-500 italic">{{ date('d-m-y', strtotime($post->updated_at)) }}</span></span>
            <p class="text-l text-gray-700 py-8 leading-6">{{$post->description}}</p>
            <a href="/blog/{{$post->slug}}" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-lg place-self-start">Read More</a>
        </div>
    </div>
    @endforeach

@endsection
