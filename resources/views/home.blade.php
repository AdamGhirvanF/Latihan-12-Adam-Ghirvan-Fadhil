@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @auth
                <div class="card-header">Halo nama saya {{ auth()->user()->name }}</div>
                @endauth
                @guest
                <div class="card-header">Halo guest!</div>
                @endguest
                <div class="card-body">
                    <table class="table table-dark">
                        <tr>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Diskon</th>
                            <th>Harga Diskon</th>
                        </tr>
                    @foreach ($product as $data)
                        <tr>
                            <td>{{$data['name']}}</td>
                            @foreach($kategori as $k)
                            @if($data['kategoriId'] == $k['id'])
                            <td>{{$k['namaKategori']}}</td>
                            @endif
                            @endforeach
                            <td>{{$data['harga']}}</td>
                            <td>{{$data['diskon']}}</td>
                            <td>{{$data['harga'] - ($data['harga'] * $data['diskon'])}}</td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
