<?php

namespace App\Repository\Story;


interface StoryRepositoryInterface
{
    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id, $hasAuthHeader);

    public function all();
}