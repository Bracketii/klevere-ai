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
        return redirect()->route('marketing.chat')->with('success', 'Saved successfully');
    }

    public function projectSaveArtist(){
      Auth::user()->histories()->create([
        'title'=>request('title'),
        'content'=>request('content'),
      ]);
      return redirect()->route('artist.chat')->with('success', 'Saved successfully');
  }

  public function projectSaveGuidance(){
    Auth::user()->histories()->create([
      'title'=>request('title'),
      'content'=>request('content'),
    ]);
    return redirect()->route('guidance.chat')->with('success', 'Saved successfully');
}

  public function projectSaveHR(){
    Auth::user()->histories()->create([
      'title'=>request('title'),
      'content'=>request('content'),
    ]);
    return redirect()->route('hr.chat')->with('success', 'Saved successfully');
  }

  public function projectSaveSales(){
    Auth::user()->histories()->create([
      'title'=>request('title'),
      'content'=>request('content'),
    ]);
    return redirect()->route('sales.chat')->with('success', 'Saved successfully');
  }

  public function projectSaveTech(){
    Auth::user()->histories()->create([
      'title'=>request('title'),
      'content'=>request('content'),
    ]);
    return redirect()->route('tech.chat')->with('success', 'Saved successfully');
  }

    

    public function projectSaveChat(){
      Auth::user()->histories()->create([
        'title'=>request('title'),
        'content'=>request('content'),
      ]);
      return to_route('chat')->with('success', 'Saved successfully');
  }
}
