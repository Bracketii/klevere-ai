<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HistoryController extends Controller
{
    public function projectSaveMarketing(){
        Auth::user()->histories()->create([
          'title'=>request('title'),
          'content'=>request('content'),
        ]);
        return redirect()->route('marketing.chat');
    }

    public function projectSaveArtist(){
      Auth::user()->histories()->create([
        'title'=>request('title'),
        'content'=>request('content'),
      ]);
      return redirect()->route('artist.chat');
  }

  public function projectSaveGuidance(){
    Auth::user()->histories()->create([
      'title'=>request('title'),
      'content'=>request('content'),
    ]);
    return redirect()->route('guidance.chat');
}

  public function projectSaveHR(){
    Auth::user()->histories()->create([
      'title'=>request('title'),
      'content'=>request('content'),
    ]);
    return redirect()->route('hr.chat');
  }

  public function projectSaveSales(){
    Auth::user()->histories()->create([
      'title'=>request('title'),
      'content'=>request('content'),
    ]);
    return redirect()->route('sales.chat');
  }

  public function projectSaveTech(){
    Auth::user()->histories()->create([
      'title'=>request('title'),
      'content'=>request('content'),
    ]);
    return redirect()->route('tech.chat');
  }

    

    public function projectSaveChat(){
      Auth::user()->histories()->create([
        'title'=>request('title'),
        'content'=>request('content'),
      ]);
      return to_route('chat')->with('success', 'Saved successfully');
  }
}
