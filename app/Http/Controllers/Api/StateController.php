<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\StateResource;
use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    public function index()
    {
        return StateResource::collection(State::all());
    }

    public function show($id)
    {
        return new StateResource(State::find($id));
    }
}
