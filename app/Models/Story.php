<?php

namespace App\Models;

use App\Http\Filters\V1\QueryFilter;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Story extends Model
{
    use HasFactory;

    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'story_tag', 'story_id', 'tag_id');
    }

    public function state() : BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function scopeFilter(Builder $builder, QueryFilter $filters){
        return $filters->apply($builder);
    }

    protected $guarded = [
        'created_at',
        'updated_at'
    ];
}
