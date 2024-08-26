<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("chats")->insert([
            "send_chat" => "Halo",
            "get_chat" => "Hai",
            "created_at"=> now()->format("Y-m-d H:i:s"),
            "updated_at"=> now()->format("Y-m-d H:i:s"),
        ]);
    }
}
