<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\CreateStoryRequest;
use App\Http\Requests\UpdateStoryRequest;
use App\Http\Controllers\Controller;
use App\Repository\Story\StoryRepositoryInterface;

class StoryController extends Controller
{
    public function __construct(protected StoryRepositoryInterface $storyRepository) {}
        
    public function create(CreateStoryRequest $data)
    {
        return $this->storyRepository->create($data->toArray());
    }

    public function update(UpdateStoryRequest $data, $id)
    {
       return $this->storyRepository->update($data->toArray(), $id);
    }

    public function delete($id)
    {
        return $this->storyRepository->delete($id);
    }

    public function find($id)
    {
       return $this->storyRepository->find($id);
    }

    public function all()
    {
        return $this->storyRepository->all();
    }
}
