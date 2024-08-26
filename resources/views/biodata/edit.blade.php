@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body shadow" style="background-color: white;">
            <h1>Update Biodata</h1>
            <form action="{{ route('biodata.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label class="form-label">Nama Lengkap</label>
                <input required class="form-control" type="text" name="full" id="" value="{{$data->full_name}}"><br>
                <label class="form-label">NIK</label>
                <input required class="form-control" type="text" name="nik" id="" value="{{$data->nik}}"><br>
                <label class="form-label">Umur</label>
                <input required class="form-control" type="text" name="age" id="" value="{{$data->umur}}"><br>
                <label class="form-label">Alamat</label>
                <textarea name="address" id="" cols="30" rows="10" required class="form-control">{{$data->alamat}}</textarea><br>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

