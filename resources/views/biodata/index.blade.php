@extends('layouts.app')

@section('content')
<div class="container shadow" style="background-color:white; padding: 20px; box-shadow: 1px black;">
    <h1>List Biodata</h1>
    <a href="{{ route('biodata.create') }}" class="btn btn-success mb-2 float-end">Tambah Data</a>
    <table class="table table-light text-center">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Tanda Tangan</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $key => $d)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$d->full_name}}</td>
                <td>{{$d->nik}}</td>
                <td>{{$d->umur}}</td>
                <td>{{$d->alamat}}</td>
                <td><img src="{{ asset("storage/".$d->file)}}" alt="" class="img img-fluid" style="height:100px;" srcset=""></td>
                <td><a class="btn btn-primary"href="{{ route('biodata.edit', $d->id)}}">Update</a>

                <form action="{{ route('biodata.destroy', $d->id)}}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </tr>
        @endforeach
    </table>
</div>
@endsection
