<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Http\Requests\StorePeopleRequest;
use App\Http\Requests\UpdatePeopleRequest;

class PeopleController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function show(People $people)
    {
        //
    }

    public function update(UpdatePeopleRequest $request, People $people)
    {
        //
    }

    public function destroy(People $people)
    {
        //
    }
}
