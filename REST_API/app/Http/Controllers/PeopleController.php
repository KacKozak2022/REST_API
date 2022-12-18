<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Http\Requests\StorePeopleRequest;
use App\Http\Requests\UpdatePeopleRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index() : JsonResponse
    {
        $person = People::all();
        return response()->json($person, 200);
    }

    public function store($id) : JsonResponse
    {
        $person = People::create($id);
        return response()->json($person,201);
    }

    public function show($id) : JsonResponse
    {
        $person = People::find($id);
        return response()->json($person, 200);
    }

    public function update($id) : JsonResponse
    {
        $person = People::find($id);
        $person->update();
        return response()->json($person,200);
    }

    public function destroy($id) : JsonResponse
    {
        $person = People::find($id)->delete();
        return response()->json($person, 204);
    }
}
