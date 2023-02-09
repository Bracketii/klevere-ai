<?php

namespace App\Http\Controllers\AI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class hrController extends Controller
{
    public function index(){

        return view('user.pages.avatars.hr', [
            'type' => 'demo',
        ]);
        
    }
    public function textCompletion(Request $request){
        $title=$request->text;
        $language = $request->language;
        $tone = $request->tone;
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' =>  'Act as a HR Specialist, and always answer HR questions nothing else, all other questions\' answer would be \'Ask me about HR\'. ' . 'In ' . $language . ' language, ' . 'and ' . 'in ' . $tone . ' tone. ' . 'This is my prompt: '  . $title,
            "temperature" => 0.7,
            "max_tokens" => 256,
            "top_p"=> 1,
            "frequency_penalty"=> 0,
            "presence_penalty"=> 0,
        ]);

        $text=$result['choices'][0]['text'];
        return view('user.pages.avatars.hr',['generate'=> $text, 'type' => 'main','title'=>$title]);



    }
}
