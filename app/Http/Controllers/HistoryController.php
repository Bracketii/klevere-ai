<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HistoryController extends Controller
{
    public function projectSave(){
        Auth::user()->histories()->create([
          'title'=>request('title'),
          'content'=>request('content'),
        ]);
        return to_route('marketing.chat');
    }

    public function projectSaveChat(){
      Auth::user()->histories()->create([
        'title'=>request('title'),
        'content'=>request('content'),
      ]);
      return to_route('chat');
  }
}
