<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;

    protected $table = 'penulis';

    protected $fillable = [
        'nama_penulis',
        'slug',
    ];
    protected $hidden = [];
    public function artikel()
    {
        return $this->belongsTo(Artikel::class, 'penulis_id', 'id');
    }
}
