<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kkModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tb_kk';
    protected $primaryKey = 'id_kk';
}
