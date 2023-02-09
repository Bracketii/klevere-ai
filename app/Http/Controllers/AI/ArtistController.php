<?php

namespace App\Http\Controllers\AI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class ArtistController extends Controller
{
    public function index(){

        return view('user.pages.avatars.artist', [
            'type' => 'demo',
        ]);
        
    }
    public function textCompletion(Request $request){
        $title=$request->text;
        $language = $request->language;
        $tone = $request->tone;
        $result = OpenAI::images()->create([
            'prompt' => 'This is my prompt: '  . $title ,
            "n"         => 1,
            "response_format"   => 'url',
            "size"      => '512x512'
        ]);

        $text=$result->toArray()['data'][0]['url'];
        return view('user.pages.avatars.artist',['generate'=> $text, 'type' => 'main','title'=>$title]);



    }
}
