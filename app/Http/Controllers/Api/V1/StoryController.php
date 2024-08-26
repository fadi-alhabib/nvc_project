<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\Api\V1\CreateStoryRequest;
use App\Http\Requests\Api\V1\UpdateStoryRequest;
use App\Http\Controllers\Controller;
use App\Http\Filters\V1\StoryFilter;
use App\Repository\Story\StoryRepositoryInterface;

class StoryController extends ApiController
{
    public function __construct(protected StoryRepositoryInterface $storyRepository)
    {
        $this->middleware('auth:sanctum')->only('create', 'update', 'edit', 'destroy');
    }
        
    public function create(CreateStoryRequest $data)
    {
        return $this->storyRepository->create($data->toArray());
    }

    public function update(UpdateStoryRequest $data, $id)
    {
       return $this->storyRepository->update($data->toArray(), $id);
    }

    public function destroy($id)
    {
        return $this->storyRepository->delete($id);
    }

    public function show($id)
    {
        if(request()->header('Authorization')) $hasAuthHeader = true;
        else $hasAuthHeader = false;
        
        return $this->storyRepository->find($id, $hasAuthHeader);
    }

    public function index(StoryFilter $filters)
    {
        return $this->storyRepository->all($filters);
    }
}
