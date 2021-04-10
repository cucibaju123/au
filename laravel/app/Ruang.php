<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    //Defining Table Name
    protected $table = 'ruangs';


    //So that the columns can be filled out as a form
    protected $fillable = ['id', 'nis', 'nama', 'tempat_lahir', 'tanggal_lahir', 'kelas', 'matkul_id'];

    //Primary Key
    public $primaryKey = 'id';

    //Preserving Leading Zeros in ID
    public $incrementing = false;

    public function matkul(){
        return $this->belongsTo(Matkul::class);
    }

    public function pindah_surat() {
        return $this->hasOne(PindahSurat::class);
    }
}
