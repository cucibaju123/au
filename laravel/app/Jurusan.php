<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    //Defining Table Name
    protected $table = 'jurusans';

    //So that the columns can be filled out as a form
    protected $fillable = ['id', 'nama', 'jurusan', 'universitas', 'semester', 'alamat', 'judul_program'];

    //Preserving Leading Zeros in ID
    public $incrementing = false;

    public function kkn_surat(){
        return $this->hasOne(KknSurat::class);
    }
}
