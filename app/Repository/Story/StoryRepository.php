<?php

namespace App\Repository\Story;

use App\Models\Story;
use App\Models\Tag;
use App\Http\Filters\V1\StoryFilter; 
use App\Http\Resources\V1\StoryResource;
use App\Traits\ApiResponses;

class StoryRepository implements StoryRepositoryInterface
{
    use ApiResponses;
    public function create(array $data)
    {
        $story = [
            'state_id' => $data['state_id'],
            'title' => $data['title'],
            'body' => $data['body'],
            'teller' => $data['teller'],
            'keywords' => $data['keywords'],
            'tags' => $data['tags']
        ];
        
        $newStory = Story::create($story);
        $newStory->tags()->attach($story['tags']);
        return $this->createdAt('Created successfuly', route('stories.show', ['story' => $newStory->id]));
    }

    public function update(array $data, $id)
    {
        $story = Story::find($id);
        $story->update($data);
        if($data['tags'])
            $story->tags()->sync($data['tags']);
        return $this->noContent();
    }

    public function delete($id)
    {
        $story = Story::find($id);
        $story->tags()->detach();
        $story->delete();
        return  $this->noContent();
    }

    public function find($id, $hasAuthHeader)
    {
        $story = Story::find($id);
        if(!$hasAuthHeader){
            $story->clicks++;
            $story->save();
        }
        
        return new StoryResource($story);
    }

    
    public function all(StoryFilter $filters)
    {
        return StoryResource::collection(Story::filter($filters)->paginate());
    }
}