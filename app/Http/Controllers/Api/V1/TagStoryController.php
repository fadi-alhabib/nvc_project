<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Filters\V1\StoryFilter;
use App\Http\Resources\V1\StoryResource;
use App\Models\Story;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagStoryController extends Controller
{
    public function index($tag_id, StoryFilter $filters)
    {
        $stories = Tag::find($tag_id)->stories();
        return StoryResource::collection($stories->filter($filters)->paginate());
    }
}
