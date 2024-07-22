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
<<<<<<< HEAD
        'info_tambahan',
        'dokumentambahan'
    ];

    protected $primaryKey = 'id_layanan';


=======
        'info_tambahan'
    ];

>>>>>>> 3c0a5951cdd9ab439fc07cc569c321d59fd3715b
    public $timestamps = false;
}
