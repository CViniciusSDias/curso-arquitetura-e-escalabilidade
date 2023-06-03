<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Mail\ReviewCreated;
use App\Models\Review;
use App\Models\Specialist;
use Illuminate\Support\Facades\Mail;

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
    public function store(Specialist $specialist, StoreReviewRequest $request)
    {
        $review = Review::create([
            'specialist_id' => $specialist->id,
            ...$request->safe()->all()
        ]);
        $reviewCreatedEmail = new ReviewCreated($review);
        Mail::to($specialist->email)->send($reviewCreatedEmail);

        return response()->json($review, 201);
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
    public function update(StoreReviewRequest $request, Review $review)
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
