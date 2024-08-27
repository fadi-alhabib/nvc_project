<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Filters\V1\StoryFilter;
use App\Http\Resources\V1\StoryResource;
use App\Models\Story;
use Illuminate\Http\Request;

class StateStoryController extends Controller
{
    public function index($state_id, StoryFilter $filters){
        return StoryResource::collection(
            Story::where('state_id', $state_id)->filter($filters)->paginate()
        );
    }
}
