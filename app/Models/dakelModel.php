<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dakelModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tb_dakel';
    protected $primaryKey = 'id_dakel';
}
