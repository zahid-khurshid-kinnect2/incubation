<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ContactForm extends Authenticatable
{

    protected $fillable = [ ];
    protected $table = 'watchlearn_contact_form';

    public function contactId()
    {
        return $this->hasMany('App\Degree', 'contact_id');
    }
}
