<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LawyerEntry extends Model
{
    protected $fillable = ['username', 'email', 'phone', 'password', 'gender'];

}
