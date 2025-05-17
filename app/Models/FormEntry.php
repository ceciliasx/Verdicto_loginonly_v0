<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormEntry extends Model
{
    protected $fillable = ['username', 'email', 'phone', 'gender','password'];
}
