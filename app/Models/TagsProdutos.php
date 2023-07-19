<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagsProdutos extends Model
{
    use HasFactory;

    protected $fillable = [
        'produto_id',
        'tag_id'
    ];

    public function products()
    {
        return $this->belongsToMany(Produtos::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
