<?php

namespace App\Repository\Story;

use App\Models\Story;
use App\Http\Requests\Api\V1\CreateStoryRequest;
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

    public function find($id)
    {
        $story = Story::find($id);
        $story->tags;
        $story->clicks++;
        $story->save();
        return $this->ok('Story retrieved', [
            'story' => $story,
        ]);
    }
    
    public function all()
    {
        $stories = Story::all();
        return $this->ok('Stories retrieved', [
            'stories' => $stories
        ]);
    }
}