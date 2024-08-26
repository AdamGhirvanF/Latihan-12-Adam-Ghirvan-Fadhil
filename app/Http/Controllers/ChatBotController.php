<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Chat;

class ChatBotController extends Controller
{
    public function index(){
        $data = Chat::all();

        return view("chatbot")->with("data", $data);
    }

    public function store (Request $request){
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

        $newChat = new Chat();
        $newChat->send_chat = $input;
        $newChat->get_chat = $chatBotResponse;
        $newChat->save();

        return redirect()->back()->with(
            ['response' => $chatBotResponse,
            'prompt' => $input]);
    }
}
