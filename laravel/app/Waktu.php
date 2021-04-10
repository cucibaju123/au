<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waktu extends Model
{
    //Defining Table Name
    protected $table = 'waktus';

    //So that the columns can be filled out as a form
    protected $fillable = ['kode','pukul'];
}
