<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $specialist)
    {
        return Review::where('specialist_id', $specialist)->paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(string $specialist, StoreReviewRequest $request)
    {
        return response()->json(Review::create([
            'specialist_id' => $specialist,
            ...$request->safe()->all()
        ]), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        return $review;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        $review->update($request->safe()->all());

        return $review;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $review)
    {
        Review::destroy($review);
        return response()->noContent();
    }
}
