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
        $tags = $data['tags'];
        $story = [
            'state_id' => $data['state_id'],
            'title' => $data['title'],
            'body' => $data['body'],
            'teller' => $data['teller'],
            'keywords' => $data['keywords'],
            'tags' => $data['tags']
        ];
        
        $newStory = Story::create($story);
        $newStory->tags()->attach($tags);
        return $this->createdAt('Created successfuly', route('stories.show', ['story' => $newStory->id]));
    }

    public function update(array $data, $id)
    {
        $story = Story::find($id);
        $story->update($data);
        return $this->noContent();
    }

    public function delete($id)
    {
        $story = Story::find($id);
        $story->delete();
        return  $this->noContent();
    }

    public function find($id)
    {
        $story = Story::find($id);
        $story->clicks++;
        $story->save();
        return $this->ok('Story retrieved', [
            'story' => $story
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