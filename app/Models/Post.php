<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function otherTags()
    {
        return $this->morphToMany(Tag::class, 'taggable')
            ->using(Taggable::class)
            ->withPivot(['tagged_at']);
    }
}
