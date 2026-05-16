<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'rev_name' => 'required|string|max:255',
            'rev_role' => 'nullable|string|max:255',
            'rev_rating' => 'required|integer|min:1|max:5',
            'rev_text' => 'required|string|max:1000',
        ]);

        try {
            Review::create([
                'name' => $validated['rev_name'],
                'role' => $validated['rev_role'] ?? null,
                'rating' => $validated['rev_rating'],
                'text' => $validated['rev_text'],
                'approved' => false, // Set to false by default for moderation
            ]);

            $message = app()->getLocale() === 'fr' 
                ? 'Merci pour votre avis ! Il sera publié après validation.' 
                : 'Thank you for your review! It will be published after validation.';

            return response()->json([
                'success' => true,
                'message' => $message
            ]);
        } catch (\Exception $e) {
            Log::error('Review creation failed: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error saving review.'
            ], 500);
        }
    }
}
