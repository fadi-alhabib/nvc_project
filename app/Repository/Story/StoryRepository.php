<?php

namespace App\Repository\Story;

use App\Models\Story;
use App\Http\Requests\CreateStoryRequest;

class StoryRepository implements StoryRepositoryInterface
{
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
        
        Story::create($story)->tags()->attach($tags);

        return response()->json([
            'message' => 'story created',
            'new_story' => $data 
        ], 201);
    }

    public function update(array $data, $id)
    {
        $story = Story::find($id);
        $story->update($data);
        return response()->json([
            'message' => 'story updated',
            'new_story' => $story 
        ], 204);
    }

    public function delete($id)
    {
        $story = Story::find($id);
        $story->delete();
        return response()->json([
            'message' => 'story deleted',
        ], 204);
    }

    public function find($id)
    {
        $story = Story::find($id);
        $story->clicks++;
        $story->save();
        return response()->json([
            'message' => 'story updated',
            'new_story' => $story 
        ], 200);
    }
    
    public function all()
    {
        $stories = Story::all();
        return response()->json([
            'message' => 'story updated',
            'stories' => $stories 
        ], 200);
    }
}