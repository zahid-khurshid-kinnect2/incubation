<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Degree extends Authenticatable
{

    protected $fillable = ['name' ,'contact_id'];
    protected $table = 'degree';

}
