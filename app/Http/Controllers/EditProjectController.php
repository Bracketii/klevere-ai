<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\History;

class EditProjectController extends Controller
{
   public function showEditForm($id)
   {
    $all_data = History::latest()->get();
    $histories = History::findOrFail($id);
    // dd($histories);
    return view('user.pages.projects.view',[
        'histories' => $histories,
        'all_data'  => $all_data,
    ]);
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
