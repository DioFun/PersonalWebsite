@extends('layouts.dashboard')

@section('title', 'About - New')

@section('content')
    <main>
        <h1 class="text-4xl font-semibold select-none">New item in about</h1>
        <hr class="my-4 bg-blue-600"><br>
        @if($errors->any())
            <div class="alert-danger-full select-none">
                One or several errors occurred during data processing.
                <ul class="fa-ul">
                    @foreach ($errors->all() as $error)
                        <li><span class="fa-li"><i class="fa-solid fa-chevron-right"></i></span>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('adminAboutNewSend') }}" method="post" class="m-4" enctype="multipart/form-data">
            @csrf
            <div class="sm:space-y-4 md:space-y-0 md:grid md:gap-4 md:grid-cols-2 2xl:grid-cols-4">
                <div class="w-full text-left">
                    <label for="title" class="select-none text-md sm:text-xl">Title</label>
                    <input class="mb-6 h-7 w-full outline-none bg-transparent border-solid border-b-2 px-2 border-blue-600 focus:border-blue-300 focus:caret-blue-600 sm:mb-0" type="text" name="title" id="title" placeholder="My beautiful title" value="{{ old('title') }}" maxlength="50" required>    
                </div>
                <div class="w-full text-left">
                    <label for="type" class="select-none text-md sm:text-xl">Type</label>
                    <select name="type" id="type" class="mb-6 h-7 w-full outline-none bg-transparent border-b-2 px-2 border-solid border-blue-600 focus:border-blue-300 sm:mb-0" required>
                        <option value="0">Choose a type</option>
                        <option value="1">Experience</option>
                        <option value="2">Studies</option>
                        <option value="3">Certificate</option>
                        <option value="4">Language</option>
                        <option value="5">Skill</option>
                    </select> 
                </div>
                <div class="w-full text-left grid grid-cols-2 gap-2 sm:gap-4">
                    <div class="w-full">
                        <label for="start" class="select-none text-md sm:text-xl">From</label>
                        <input class="mb-6 h-7 w-full outline-none bg-transparent border-solid border-b-2 px-2 border-blue-600 focus:border-blue-300 focus:caret-blue-600 sm:mb-0" type="date" name="start" id="start" value="{{ old('start') }}" required> 
                    </div>
                    <div class="w-full">
                        <label for="end" class="select-none text-md sm:text-xl">To</label>
                        <input class="mb-6 h-7 w-full outline-none bg-transparent border-solid border-b-2 px-2 border-blue-600 focus:border-blue-300 focus:caret-blue-600 sm:mb-0" type="date" name="end" id="end" value="{{ old('end') }}"> 
                    </div>
                </div>
                <div class="w-full text-left">
                    <label for="image" class="select-none text-md sm:text-xl">Image</label>
                    <input class="mb-6 h-7 w-full outline-none bg-transparent file:border-none file:text-white file:rounded-full file:px-4 file:py-max file:bg-blue-600 file:hover:bg-blue-500 sm:mb-0" type="file" name="image" id="image">   
                </div>
            </div>
            <div class="text-left w-full my-4">
                <label for="shortDesc" class="select-none text-md sm:text-xl">Short description</label>
                <textarea name="shortDesc" id="shortDesc" class="mt-2 px-2 outline-none w-full h-48 sm:h-24 resize-none bg-transparent border-2 border-solid border-blue-600 rounded-md focus:border-blue-400 focus:caret-blue-600" placeholder="Short description here...">{{ old('shortDesc') }}</textarea>
            </div>
            <div id="editor" class="w-full">{{ old('editor') }}</div>
            <div class="w-full text-center mt-4">
                <button type="submit" class="rounded-full py-1 px-4 bg-blue-600 hover:bg-blue-500 text-white text-md">Create</button>
            </div>
        </form>
    </main>
@endsection


@section('scripts')
    <script>
        tinymce.init({
            selector: '#editor',
            plugins: 'lists advlist anchor autolink charmap code codesample emoticons image link media preview quickbars table wordcount searchreplace',
            toolbar_mode: 'sliding',
            link_default_target: "_blank",
            menubar: false,
            toolbar: 'blocks fontfamily fontsize language preview | align forecolor backcolor subscript superscript | link bullist numlist hr | charmap emoticons | indent outdent | image media table blockquote anchor codesample',
            link_context_toolbar: true,
            quickbars_insert_toolbar: false,
            quickbars_selection_toolbar: "align removeformat bold italic strikethrough underline | link h1 h2 | table",
            contextmenu: "undo redo | copy paste searchreplace | code print",
            content_langs: [
                { title: 'English', code: 'en' },
                { title: 'Spanish', code: 'es' },
                { title: 'French', code: 'fr' },
                { title: 'German', code: 'de' },
            ],
            mobile: {
                menubar: false,
                toolbar: 'align forecolor backcolor subscript superscript | link bullist numlist hr | blocks fontfamily fontsize language preview | charmap emoticons | indent outdent | image media table blockquote anchor codesample',
                toolbar_mode: 'sliding',
            }
        });
    </script>
@endsection