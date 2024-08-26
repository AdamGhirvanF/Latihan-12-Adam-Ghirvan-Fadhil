<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userSearch(Request $request) {
        $user = $request->query('name');
        $email = $request->query('email');

        $response = response()->json([
            "name" => $user,
            "email" => $email,
            "dataAlamat" => [
                "nomor" => 1,
                "Kota" => "Tangerang Selatan",
                "Provinsi" => "Banten",
                "Negara" => "Indonesia",
            ],
            [
                "nomor" => 2,
                "Kota" => "Tangerang Selatan",
                "Provinsi" => "Banten",
                "Negara" => "Indonesia",
            ]
        ] ,200);

        return $response;
    }

    public function findUser($id) {
        return "user {$id}";
    }
}
