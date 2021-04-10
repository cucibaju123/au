<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengantarSurat extends Model
{
    //Defining Table Name
    protected $table = 'pengantar_surats';

    //So that the columns can be filled out as a form
    protected $fillable = ['no_surat', 'tanggal', 'tanggal_kenaikan', 'pangkat_asal', 'pangkat_tujuan', 'jumlah'];



    //One Surat Has Many Dosen
    public function dosen(){
        return $this->hasMany(Dosen::class);
    }
}
