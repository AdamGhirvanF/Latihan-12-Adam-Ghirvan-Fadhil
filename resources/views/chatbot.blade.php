@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Input Prompt</div>

                <div class="card-body">
                @if(session()->has('response'))
                <p><b>User</b>{!! Str::markdown(e(session('prompt'))) !!}</p>
                <p><b>Gemini</b>{!! Str::markdown(e(session('response'))) !!}</p>
                @endif
                <form action="{{ url('chatbot/process') }}" method="post">
                @csrf
                    <input type="text" name="prompt" name="prompt" class="form-control mb-3" id="">

                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
