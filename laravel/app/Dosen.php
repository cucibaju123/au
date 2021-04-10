<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    //Defining Table Name
    protected $table = 'dosens';

    //So that the columns can be filled out as a form
    protected $fillable = ['id', 'nama', 'jenis_kelamin', 'pangkat', 'jabatan', 'pengantar_surat_id'];

    //Primary Key
    public $primaryKey = 'id';

    //Default Avatar
    public function getAvatar(){
        if(!$this->avatar){
            return asset('images/default.jpg');
        }
        return asset('images/'.$this->avatar);
    }

    //Database Relationship
    public function tugas_surat(){
        return $this->hasOne(TugasSurat::class);
    }

    public function pengantar_surat() {
        return $this->belongsTo(PengantarSurat::class);
    }


}
