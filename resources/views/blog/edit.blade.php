

@extends('layouts.app')

@section("title", "Create Post")

@section('content')
    <div class="container m-auto text-center pt-15 pb-5">
        <h3 class="text-4xl font-bold">Add New Post</h3>
    </div>


    <div class="container m-auto pt-15 pb-5">

        <form action="/blog" method="post" enctype="multipart/form-data">
            @csrf

            <input type="text" name="title" value="{{ old('title', $post->title) }}" class="w-full h-2 text-2xl rounded-lg shadow-lg border-b p-10 mb-5" placeholder="Title" id="">

            <textarea name="description" value="{{ old('description', $post->description) }}" class="w-full h-60 text-2xl rounded-lg shadow-lg border-b p-10 mb-5"placeholder="Description"  id="" cols="30" rows="10"></textarea>

            <div class="py-15">
                <label for="image" class="
                    bg-gray-200 hover:bg-gray-700
                    text-gray-700 hover:text-gray-200
                    transition duration-300
                    cursor-pointer
                    p-5 rounded-lg
                    font-bold uppercase
                "><span>Select an image to upload</span></label>
                <input type="file" name="image" class="hidden" id="image">
            </div>



            <button type="submit" class="
                bg-green-700 hover:bg-green-200
                text-gray-200 hover:text-gray-700
                transition duration-300
                cursor-pointer
                p-5 rounded-lg
                font-bold uppercase
                ">Edit</button>
        </form>


    </div>


@endsection

