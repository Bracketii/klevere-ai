<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;


class user extends Authenticatable
{
    use HasFactory, Billable;

    protected $guarded=[];


    public function histories(){
        return $this->hasMany(History::class);
    }
}
