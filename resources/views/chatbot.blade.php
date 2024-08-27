@extends('layouts.app')

@section('content')
<div class="container" id="chat-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Input Prompt</div>

                <div class="card-body">
                @foreach ($data as $d)
                <p style="text-align:right;"><b>User</b><br>{{ $d->send_chat}}</p>
                <p style="color:red;"><b>Gemini</b>{!! Str::markdown($d->get_chat) !!}</p>
                @endforeach
                <form action="{{ url('chatbot') }}" method="post">
                @csrf
                    <input type="text" name="prompt" name="prompt" class="form-control mb-3" id="">
                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var chatContainer = document.getElementById('chat-container');
        chatContainer.scrollTop = chatContainer.scrollHeight;
    });
</script>
@endsection
