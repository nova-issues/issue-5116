<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable')
            ->using(Taggable::class)
            ->withPivot(['tagged_at']);
    }

    public function videos()
    {
        return $this->morphedByMany(Video::class, 'taggable')
            ->using(Taggable::class)
            ->withPivot(['tagged_at']);
    }
}
