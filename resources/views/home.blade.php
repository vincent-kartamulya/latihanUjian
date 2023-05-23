@extends('layout.master')
@section('title', 'Halaman Home')
@section('content')
    <div class="container mx-auto grid grid-cols-3">
        @foreach ($books as $book)
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{$book->title}}</div>
                    <p class="text-gray-700 text-base">
                        {{$book->Detail->description}}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Genre : {{$book->Category->category}}</span>
                </div>
            </div>
         @endforeach
        @if (count($books) == 0)
        <div>
            <h1>No Data</h1>
        </div>
        @endif

    </div>
@endsection
