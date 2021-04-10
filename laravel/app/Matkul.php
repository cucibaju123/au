<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    //Defining Table Name
    protected $table = 'matkuls';

    //So that the columns can be filled out as a form
    protected $fillable = ['surat_id', 'nama'];


    //Database Relationship
    public function ruang(){
        return $this->hasMany(Ruang::class);
    }

    public function surat(){
        return $this->belongsTo(Surat::class);
    }
}
