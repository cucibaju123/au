<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TugasSurat extends Model
{
    //Defining Table Name
    protected $table = 'tugas_surats';

    //So that the columns can be filled out as a form
    protected $fillable = ['no_surat', 'dosen_id', 'tanggal', 'tanggal_acara', 'acara', 'waktu_mulai', 'waktu_selesai', 'alamat'];



    //One Surat Has Many Lomba/Matkul
    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}