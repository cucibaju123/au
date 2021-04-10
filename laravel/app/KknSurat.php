<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KknSurat extends Model
{
    //Defining Table Name
    protected $table = 'kkn_surats';

    //So that the columns can be filled out as a form
    protected $fillable = [ 'jurusan_id', 'no_surat', 'tanggal', 'kepada', 'lembaga', 'di', 'no_surat_ajuan', 'tanggal_surat_ajuan', 'tanggal_mulai', 'tanggal_selesai'];



    //One Surat Has Many Lomba/Matkul
    public function jurusan(){
        return $this->belongsTo(Jurusan::class);
    }
}
