<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class respon extends Model
{
    use HasFactory;

    protected $table = 'tb_respon';

    protected $primaryKey = 'id_respon';

    // protected $guard = 'id_respon';
    protected $fillable = [
        'dokumen',
        'user_fk',
        'status'
    ];

    public $timestamps = false;
}
