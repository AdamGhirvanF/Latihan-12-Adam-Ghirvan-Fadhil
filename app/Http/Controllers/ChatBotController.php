<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatBotController extends Controller
{
    public function index(){
        return view("chatbot");
    }

    public function process (Request $request){
        $input = $request->input('prompt');

        $url = env('GEMINI_API_BASE_URL'). env('GEMINI_API_KEY');

        $payload = [
            'contents'=> [
                [
                    'role' => 'user',
                    'parts'=> [
                        ['text' => $input]
                    ]
                ]
            ]
        ];

        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post($url, $payload);

        $chatBotResponse = $response->json()['candidates'][0]['content']['parts'][0]['text'] ?? 'No response';

        return redirect()->back()->with(
            ['response' => $chatBotResponse,
            'prompt' => $input]);
    }
}
