<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphPivot;

class Taggable extends MorphPivot
{
    protected $table = 'taggables';

    protected $casts = [
        'tagged_at' => 'datetime',
    ];

    public $timestamps = true;

    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }
}
