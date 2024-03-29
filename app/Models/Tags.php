<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $table = 'tags';

    protected $fillable = [
        'nama_tags',
        'slug',
    ];
    protected $hidden = [];
    public function artikel()
    {
        return $this->hasMany(Artikel::class, 'tags_id', 'id');
    }
}
