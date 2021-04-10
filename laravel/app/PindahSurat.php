<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PindahSurat extends Model
{
    //Defining Table Name
    protected $table = 'pindah_surats';

    //So that the columns can be filled out as a form
    protected $fillable = ['no_surat', 'tanggal', 'ruang_id', 'wali', 'pekerjaan', 'alamat', 'sekolah_tujuan', 'alamat_sekolah_tujuan'];



    //One Surat Has Many Lomba/Matkul
    public function ruang(){
        return $this->belongsTo(Ruang::class);
    }
}
