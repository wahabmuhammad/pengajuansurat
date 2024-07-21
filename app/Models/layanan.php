<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    use HasFactory;
    protected $table = 'tb_ketentuan';
    
    protected $fillable = [
        'nama_layanan',
        'ketentuan',
    ];
}
