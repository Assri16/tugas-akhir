<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $fillable = [
        'nama_kelas'
    ];
    
     public function siswa()
    {
        return $this->belongsTo('App\siswa', 'id_kelas');
    }
}

