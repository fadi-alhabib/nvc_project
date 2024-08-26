<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\V1\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\StateResource;
use Illuminate\Http\Request;
use App\Models\State;

class StateController extends ApiController
{
    public function index()
    {
        if($this->include('stories')){
            return StateResource::collection(State::with('stories')->all());
        }
        return StateResource::collection(State::all());
    }

    public function show($id)
    {
        if($this->include('stories')){
            return new StateResource(State::find($id)->load('stories'));
        }

        return new StateResource(State::find($id));
    }
}
