<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artikel extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'artikel';
    protected $fillable = [
        'judul',
        'slug',
        'kategori_id',
        'penulis_id',
        'tags_id',
        'user_id',
        'gambar_artikel',
        'is_active',
        'views',
        'body',
    ];
    protected $hidden = [];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'penulis_id', 'id');
    }
    public function tagArtikel()
    {
        return $this->belongsTo(Tags::class, 'tags_id', 'id');
    }
}
