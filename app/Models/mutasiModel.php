<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mutasiModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tb_mutasi';
    protected $primaryKey = 'id_mutasi';
}
