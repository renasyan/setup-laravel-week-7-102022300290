<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class history extends Model
{
    //
    use HasFactory;
    
    protected $fillable = [
        'judul',
        'rating',
        'genre',
        'status',
        'episode'
    ];
    protected $table = 'histories';
    protected $primaryKey = 'id';
}
