<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    //Defining Table Name
    protected $table = 'surats';

    //So that the columns can be filled out as a form
    protected $fillable = ['no_surat', 'tanggal', 'lomba', 'jenjang', 'alamat_pertama', 'alamat_kedua', 'tahun_lomba', 'tahun_ajaran'];



    //One Surat Has Many Lomba/Matkul
    public function matkul(){
        return $this->hasMany(Matkul::class);
    }

    
}
