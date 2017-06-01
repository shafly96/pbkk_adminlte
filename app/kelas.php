<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'kode_kelas';
    public $incrementing = false;

    protected $fillable = [
      'kode_kelas', 'kuliah_pemakai', 'nip_pengajar'
    ];
}
