@extends('layouts.dashboard')

@section('title', 'Messages')

@section('content')

    <main>
        <h1 class="text-4xl ml-4 font-semibold select-none">Messages</h1>
        <hr class="my-4 bg-blue-600">
        @if ($messages)
            <table id="messages" class="display w-full h-full">
                <thead>
                    <tr>
                        <th>Author</th>
                        <th>Mail</th>
                        <th class="hidden sm:table-cell">Message</th>
                        <th>Confirmed</th>
                        <th class="hidden sm:table-cell">Ip</th>
                        <th class="hidden sm:table-cell">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                        </a>
                            <td><a href="{{ route('adminMessageView', ["id" => $message['id']]) }}">{{ $message['name'] }}</a></td>
                            <td>{{ $message['mail'] }}</td>
                            <td class="hidden sm:table-cell">{{ $message['message'] }}</td>
                            <td>{{ $message['confirmed'] ? 'Yes' : 'No' }}</td>
                            <td class="hidden sm:table-cell">{{ $message['ip'] }}</td>
                            <td class="hidden sm:table-cell"><a class="w-full text-center" href="{{ route('adminMessagesDelete', ["id" => $message['id']]) }}"><i class="fa-solid fa-trash text-red-600 hover:text-red-400"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <span class="text-xl ml-4 select-none">There are no messages!</span>
        @endif
    </main>

@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#messages').DataTable();
        });
    </script>
@endsection