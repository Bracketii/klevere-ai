<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $guarded=[];



    // relationship with user
    public function historyBelongsTo(){
        return $this->belongsTo(user::class);
    }
}
