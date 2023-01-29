<?php

namespace App\Http\Controllers\AI;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use OpenAI\Laravel\Facades\OpenAI;

class AIController extends Controller
{
    public function index(){

        return view('user.pages.chat.chat');
    }
    public function textCompletion(Request $request){

        $text=$request->text;
        $language = $request->language;
        $tone = $request->tone;
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' =>  'In' . $language . 'language, ' . 'in' . $tone . 'tone, ' . $text,
            "temperature" => 0.7,
            "max_tokens" => 256,
            "top_p"=> 1,
            "frequency_penalty"=> 0,
            "presence_penalty"=> 0,
        ]);

        $text=$result['choices'][0]['text'];
        Auth::user()->histories()->create([
            'title'=>request('text'),
            'content'=>json_encode($result)

        ]);
        return view('user.pages.chat.chat',['generate'=> $text]);



    }
}
