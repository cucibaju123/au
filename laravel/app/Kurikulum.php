<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    //Defining Table Name
    protected $table = 'kurikulums';

    //So that the columns can be filled out as a form
    protected $fillable = ['kode','tahun'];
}
