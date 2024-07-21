<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataLayanan extends Model
{
    use HasFactory;
    protected $table = 'tb_layanan';
    
    protected $fillable = [
        'nik',
        'id_layanan',
        'info_tambahan',
        'dokumentambahan'
    ];

    protected $primaryKey = 'id_layanan';


    public $timestamps = false;
}
