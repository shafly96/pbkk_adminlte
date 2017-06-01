<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ambil_matkul extends Model
{
    protected $fillable = [
      'tempat_kelas', 'nrp_pengambil', 'uts', 'uas'
    ];
}
