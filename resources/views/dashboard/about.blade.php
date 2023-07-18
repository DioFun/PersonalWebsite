@extends('layouts.dashboard')

@section('title', 'About')

@section('content')

    <main>
        <div class="grid grid-cols-2 gap-4 mx-4">
            <h1 class="text-4xl font-semibold select-none">About</h1>
            <a href="{{ route('adminAboutNew') }}" class="place-self-end w-fit my-auto py-2 px-4 rounded-full text-white text-lg bg-blue-500 hover:bg-blue-600"><i class="fa-solid fa-plus mr-1"></i> New</a>
        </div>
        <hr class="my-4 bg-blue-600"><br>
        @if ($abouts)
            @foreach ($abouts as $about)
                {{ $about['title'] }}
            @endforeach
        @else
            <div class="text-lg mx-4 select-none">There is nothing to display!</div>
        @endif
    </main>

@endsection