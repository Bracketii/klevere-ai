<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use OpenAI\Laravel\Facades\OpenAI;

class BlogController extends Controller
{
    public function index(){
        return view('user.pages.marketing.index');
    }

    public function show(){
        return view('user.pages.marketing.blog');
    }


    public function textCompletion(Request $request){
        

        $this->validate(request(),[
            'word_input'=>'required',

        ]);
        $word_input = intval($request->word_input);
        $order=Orders::where('user_id',Auth::id())->first();
        $oldlimit=$order->word_limit;
        if($oldlimit<$word_input){
            return to_route('order');
        }


        $output=$request->output;
        $keywords=$request->keywords;
        $title=$request->text;
        $text=$request->text;
        $language = $request->language;
        $tone = $request->tone;
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => 'Act as a ' . 'Marketing Blog Post Writer' . 'Must generate ' . $word_input . ' words ' . 'with ' . $output . ' variations' . '. In ' . $language . ' language, ' . 'in ' . $tone . ' tone. ' . 'This is my prompt: ' . $text . '. Use these keywords: ' . $keywords . '. Give results in HTML Format',
            "temperature" => 0.7,
            "max_tokens" => intval($word_input * 1.5),
            "top_p"=> 1,
            "frequency_penalty"=> 0,
            "presence_penalty"=> 0,
        ]);

        $text=$result['choices'][0]['text'];

        if($oldlimit<=0){
            return to_route('order');
         }else{
            $order->update([


                'word_limit'=>$oldlimit - $word_input,
            ]);
            return view('user.pages.marketing.blog',['generate'=> $text, 'type' => 'main','title'=>$title]);
        }

        

    }
}
