<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $primaryKey = 'nis';
    
    public $incrementing = false;
    
    protected $fillable = [
        'nis',
        'nama_siswa',
        'id_kelas',
        'jekel',
        'kemampuan'
    ];
    
    public function kelas()
    {
        return $this->belongsTo('App\kelas', 'id');
    }
 public function scopeKelas($query, $id_kelas)
    {
        return $query->where('id_kelas', $id_kelas);
    }
}
