<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'tipology', 'country', 'estate', 'city','description', 'email', 'password'];
}
