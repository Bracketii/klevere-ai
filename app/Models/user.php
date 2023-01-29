<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class user extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,Billable;

    use HasFactory;
    protected $guarded=[];


    // relationship with histories
    public function histories(){
        return $this->hasMany(History::class);
    }
}
