<?php

namespace App\Http\Controllers\AI;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\User;
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

        $this->validate(\request(),[
            'word_input'=>'required',

        ]);
        $word_input = intval($request->word_input);
        $order=Orders::where('user_id',Auth::id())->first();
        $oldlimit=$order->word_limit;
        if($oldlimit<$word_input){
            return to_route('order');
        }


        $title=$request->text;
        $text=$request->text;
        $language = $request->language;
        $tone = $request->tone;
        $personality = $request->personality;
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => 'Act as a ' . $personality . '. In ' . $language . ' language, ' . 'in ' . $tone . ' tone. ' . 'This is my prompt: ' . $text,
            "temperature" => 0.7,
            "max_tokens" => $word_input,
            "top_p"=> 1,
            "frequency_penalty"=> 0,
            "presence_penalty"=> 0,
        ]);

        // $words = User::findOrFail(Auth::guard('web')->user()->words);
        // $words->update([
        //     'words'     => $words - $word_input,
        // ]);

        $text=$result['choices'][0]['text'];
        // $order=Orders::where('user_id',Auth::id())->first();
        // $oldlimit=$order->word_limit;

        // if($oldlimit<$word_input){
        //     return to_route('order');
        // }else{
        //     $order->update([


        //         'word_limit'=>$oldlimit - $word_input,
        //     ]);
        //     return view('user.pages.chat.chat',['generate'=> $text, 'type' => 'main','title'=>$title]);
        // }


        if($oldlimit<=0){
            return to_route('order');
         }else{
            $order->update([


                'word_limit'=>$oldlimit - $word_input,
            ]);
            return view('user.pages.chat.chat',['generate'=> $text, 'type' => 'main','title'=>$title]);
        }





    }
}
