@extends('layouts.dashboard')

@section('title', 'Message')

@section('content')

    <main>
        <h1 class="text-4xl ml-4 font-semibold select-none">Message from {{ $message['name'] }}</h1>
        <hr class="my-4 bg-blue-600"><br>
        <div class="my-4 sm:grid sm:gap-4 md:grid-cols-2 2xl:grid-cols-4 sm:mx-10 mx-4">
            <div class="w-full text-left text-xl">
                Mail: {{ $message['mail'] }}
            </div>
            <div class="w-full text-left text-xl">
                Ip: {{ $message['ip'] }}
            </div>
            <div class="w-full text-left text-xl">
                Confirmed: {{ $message['confirmed'] ? 'Yes' : 'No' }}
            </div>
            <div class="w-full text-left text-xl">
                <a href="{{ route("adminMessagesDelete", ['id' => $message['id']]) }}"><i class="fa-solid fa-trash text-red-600"></i></a>
            </div>
        </div>
        <div class="w-full text-left text-xl sm:mx-10 mx-4">
            Message: {{ $message['message'] }}
        </div>
    </main>

@endsection