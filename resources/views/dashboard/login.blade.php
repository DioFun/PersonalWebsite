@extends('layouts.public')

@section('title', 'Login')

@section('content')
    <div class="mx-auto w-5/6 my-6 flex place-content-center flex-grow">
        <div class="p-8 h-full sm:p-12 w-full md:w-3/4 3xl:w-1/2 bg-gray-200 drop-shadow-md dark:bg-neutral-800 text-black dark:text-white rounded-2xl dark:shadow-inner text-center dark:border-solid dark:border-neutral-700 dark:focus-within:border-primary-dark dark:border-2">
            <span class="text-3xl font-semibold small-caps select-none">Login</span>
            @if($errors->any())
                <div class="alert-danger-full">
                    One or several errors occurred during data processing.
                    <ul class="fa-ul">
                        @foreach ($errors->all() as $error)
                            <li><span class="fa-li"><i class="fa-solid fa-chevron-right"></i></span>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('loginProcess') }}" method="post" id="loginForm">
                <div class="mt-4 sm:grid sm:grid-cols-2 sm:gap-4">
                    <div class="w-full text-left">
                        <label class="select-none text-md sm:text-xl" for="email">Email</label>
                        <input class="mb-6 w-full outline-none bg-transparent border-solid border-b-2 px-2 dark:text-neutral-300 border-dark dark:border-neutral-600 focus:border-primary-light dark:focus:border-primary-dark focus:caret-primary-light dark:focus:caret-primary-dark sm:mb-0" type="text" name="email" id="email" placeholder="contact@example.com" value="{{ old('email') }}" maxlength="35" required>    
                    </div>
                    <div class="w-full text-left">
                        <label class="select-none text-md sm:text-xl" for="password">Password</label>
                        <input class="w-full outline-none bg-transparent border-solid border-b-2 px-2 dark:text-neutral-300 border-dark dark:border-neutral-600 focus:border-primary-light dark:focus:border-primary-dark focus:caret-primary-light dark:focus:caret-primary-dark" type="password" name="password" id="password" placeholder="Your password" required>
                    </div>
                </div>
                @csrf
                <input type="submit" class="mt-6 rounded-full bg-primary-light dark:bg-primary-dark text-white px-4 py-2 text-lg hover:cursor-pointer hover:bg-secondary-light dark:hover:bg-secondary-dark outline-none hover:scale-110 transition-all ease-in-out duration-150" value="Submit">
            </form>
        </div>
    </div>
@endsection