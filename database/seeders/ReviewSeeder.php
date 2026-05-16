<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'name' => 'Michael Chen',
                'role' => 'Property Manager',
                'rating' => 5,
                'text' => 'Outstanding post-construction cleaning. They handled a 50-unit residential building with incredible detail and efficiency. Truly professional.',
                'approved' => true,
            ],
            [
                'name' => 'Sarah Thompson',
                'role' => 'Homeowner',
                'rating' => 5,
                'text' => 'The deep cleaning service exceeded my expectations. Every corner of my house is sparkling. Highly recommend Pristovia!',
                'approved' => true,
            ],
            [
                'name' => 'David Miller',
                'role' => 'Business Owner',
                'rating' => 5,
                'text' => 'We use Pristovia for our commercial window cleaning. They are reliable, safe, and do a fantastic job every time.',
                'approved' => true,
            ],
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
