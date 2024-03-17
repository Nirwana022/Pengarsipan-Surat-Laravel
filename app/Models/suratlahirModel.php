<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratlahirModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tb_suratlahir', $primaryKey = 'no_surat';
}
