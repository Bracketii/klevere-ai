<?php

namespace App\Http\Controllers\AI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use OpenAI\Laravel\Facades\OpenAI;

class AIController extends Controller
{
    public function index(){

        return view('user.pages.chat.chat',[
            'type' => 'demo',
        ]);
    }
    public function textCompletion(Request $request){
        // $words = Auth::guard('web') -> user()->words;
        $title=$request->text;
        $text=$request->text;
        $language = $request->language;
        $tone = $request->tone;
        $personality = $request->personality;
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => 'Act as a ' . $personality . '. In ' . $language . ' language, ' . 'in ' . $tone . ' tone. ' . 'This is my prompt: ' . $text,
            "temperature" => 0.7,
            "max_tokens" => 256,
            "top_p"=> 1,
            "frequency_penalty"=> 0,
            "presence_penalty"=> 0,
        ]);

        $text=$result['choices'][0]['text'];
        return view('user.pages.chat.chat',['generate'=> $text, 'type' => 'main','title'=>$title]);

        

    }
}
