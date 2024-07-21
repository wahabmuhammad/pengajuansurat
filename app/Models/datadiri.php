<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datadiri extends Model
{
    use HasFactory;
    protected $table = 'tb_datadiri';
    
    protected $fillable = [
        'nik',
        'nama',
        'jenis_kelamin',
        'status',
        'email', 
        'nohp',
        'kabupaten', 
        'kecamatan',
        'desa',
        'rt_rw',
        'keperluan',
        'user_fk'
    ];
    protected $unique = ['user_fk'];

    public $timestamps = false;
}
