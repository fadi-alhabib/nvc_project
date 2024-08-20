<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Story extends Model
{
    use HasFactory;

    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'story_tag', 'story_id', 'tag_id');
    }

    protected $guarded = [
        'created_at',
        'updated_at'
    ];
}
