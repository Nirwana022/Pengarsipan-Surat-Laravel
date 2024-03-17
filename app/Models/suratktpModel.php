<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratktpModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tb_suratktp';
    protected $primaryKey = 'no_surat';
}
