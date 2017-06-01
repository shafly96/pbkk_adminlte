<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kuliah extends Model
{
    protected $primaryKey = 'kodekuliah';
    public $incrementing = false;

    protected $fillable = [
      'kodekuliah', 'matakuliah', 'sks'
    ];
}
