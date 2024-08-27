<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategori = [[
                "namaKategori"=> "Handphone",
                "id"=> 1,
            ],
            [
                "namaKategori"=> "Laptop",
                "id"=> 2,
            ]
        ];

        $product = [[
                "name" => "Samsul Pro Min",
                "kategoriId" => 1,
                "uniqueId" => "50000",
                "harga" => 100000,
                "diskon" => 0.1
            ],
            [
                "name" => "Samsul Pro Min",
                "kategoriId" => 1,
                "uniqueId" => "50000",
                "harga" => 100000,
                "diskon" => 0.1
            ],
            [
                "name" => "Samsul Pro Min",
                "kategoriId" => 1,
                "uniqueId" => "50000",
                "harga" => 100000,
                "diskon" => 0.1
            ],
            [
                "name" => "Samsul Pro Plus",
                "kategoriId" => 2,
                "uniqueId" => "50000",
                "harga" => 100000,
                "diskon" => 0.5
            ],
            [
                "name" => "Samsul Pro Plus",
                "kategoriId" => 2,
                "uniqueId" => "50000",
                "harga" => 100000,
                "diskon" => 0.5
            ],

        ];
        return view('home')->with([
            'kategori' => $kategori,
            'product' => $product
        ]);
    }
}
