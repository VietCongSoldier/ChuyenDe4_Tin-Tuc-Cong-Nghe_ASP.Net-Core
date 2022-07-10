<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phanhoi extends Model
{
    use HasFactory;
    protected $table ='comment';
    protected $primaryKey = 'id_phan_hoi';
}
