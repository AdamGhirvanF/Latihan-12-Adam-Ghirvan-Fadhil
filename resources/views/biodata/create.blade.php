@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body shadow" style="background-color: white;">
            <h1>Create Biodata</h1>
            <form action="{{ route('biodata.store') }}" method="post">
                @csrf
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="full" required class="form-control"><br>
                <label for="" class="form-label">NIK</label>
                <input type="text" name="nik" required class="form-control"><br>
                <label class="form-label">Umur</label>
                <input type="text" name="age" required class="form-control"><br>
                <label class="form-label">Alamat</label>
                <textarea name="address" id="" cols="30" rows="10" required class="form-control"></textarea><br>
                <button class="btn btn-block btn-success" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
