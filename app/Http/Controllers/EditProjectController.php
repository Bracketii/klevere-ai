<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\History;

class EditProjectController extends Controller
{
   public function showEditForm($id)
   {
    $histories = History::find($id);
    // dd($histories);
    return view('user.pages.projects.view',compact('histories'));
   }
   public function Edit($id)
   {
    $histories = History::find($id);
    $histories->update([
        'title'=>request('title'),
        'content'=>request('content')
    ]);
   
    return redirect()->route('user.projects');
   }
   public function showDeleteForm($id)
   {
    History::findOrFail($id)->delete();
    return redirect()->route('user.projects');
    
   }
}
