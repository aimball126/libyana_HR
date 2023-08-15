<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requestt extends Model
{
    protected $fillable = ['name', 'phone', 'email','nationality','birth','city','martial_status','address','about','cv'
];
}
