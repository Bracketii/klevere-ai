<?php

namespace App\Http\Controllers\AI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class MarketingController extends Controller
{
    public function index(){

        return view('user.pages.avatars.marketing');
    }
    public function textCompletion(Request $request){
        $title=$request->text;
        $language = $request->language;
        $tone = $request->tone;
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' =>  'Act as a Marketing Specialist, and always answer marketing questions nothing else, all other questions\' answer would be \'Ask me about marketing\'. ' . 'In ' . $language . ' language, ' . 'and ' . 'in ' . $tone . 'tone, '  . $title,
            "temperature" => 0.7,
            "max_tokens" => 256,
            "top_p"=> 1,
            "frequency_penalty"=> 0,
            "presence_penalty"=> 0,
        ]);

        $text=$result['choices'][0]['text'];
        return view('user.pages.avatars.marketing',['generate'=> $text,'title'=>$title]);



    }
}
