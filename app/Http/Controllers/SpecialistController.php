<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSpecialistRequest;
use App\Models\Specialist;

class SpecialistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Specialist::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSpecialistRequest $request)
    {
        return response()->json(Specialist::create($request->safe()->all()), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Specialist $specialist)
    {
        return $specialist;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSpecialistRequest $request, Specialist $specialist)
    {
        $specialist->update($request->safe()->all());

        return $specialist;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $specialist)
    {
        Specialist::destroy($specialist);
        return response()->noContent();
    }
}
