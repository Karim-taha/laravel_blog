

@extends('layouts.app')

@section("title", "Post")

@section('content')
    <div class="container m-auto text-center pt-15 pb-5">
        <h3 class="text-4xl font-bold">{{ $post->title }}</h3>
        <div>
            <span>By: <span class="text-gray-500 italic">{{$post->user->name}}</span></span>
            <span>On: <span class="text-gray-500 italic">{{ date('d-m-y', strtotime($post->updated_at)) }}</span></span>
        </div>
    </div>


    <div class="container m-auto pt-15 pb-5">

        <div class="flex h-96">
            <img class="object-cover w-full" src="/images/{{$post->image_path}}" alt="" srcset="">
        </div>

        <div>
            <p class="text-l text-gray-700 py-8 leading-6">{{$post->description}}</p>
        </div>

        @if(Auth::user() && Auth::user()->id == $post->user_id)
            <a href="/blog/{{$post->slug}}/edit" class="bg-green-700 hover:bg-gray-200 text-gray-100 hover:text-gray-700 py-4 px-5 mt-6 inline-block rounded-lg font-bold uppercase text-lg place-self-start">Edit</a>
        @endif
    </div>


@endsection

