<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class branches extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'email', 'city','address','mobile','mobile2','logo','map'
    ];
    protected $dates = ['deleted_at'];
    
}
