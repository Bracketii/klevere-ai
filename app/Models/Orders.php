<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Orders extends Authenticatable
{
    use HasFactory;
    protected $guarded=[];

    public function orderbelongsto(){
        $this->belongsTo(User::class);
    }

}
