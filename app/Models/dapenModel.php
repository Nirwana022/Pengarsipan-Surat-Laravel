<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dapenModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tb_dapen';
    protected $primaryKey = 'nik';
}
