<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        // Get gallery images
        $files = File::files(public_path('assets/img'));
        $gallery_images = [];
        $exclude = ['favicon.png', 'logo.png', 'hero-bg.jpg', 'partner5.png', 'partner6.png', 'placeholder.jpg'];
        
        foreach ($files as $file) {
            $filename = $file->getFilename();
            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            
            if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp']) && !in_array($filename, $exclude)) {
                $gallery_images[] = 'assets/img/' . $filename;
            }
        }
        
        // Custom sort to handle numbers in parentheses like "img10 (2).jpg"
        usort($gallery_images, function($a, $b) {
            return strnatcasecmp($a, $b);
        });

        // Get reviews (with fallback for database connection issues and default testimonials)
        try {
            $reviews = Review::where('approved', true)->latest()->get();
            if ($reviews->isEmpty()) {
                $reviews = $this->getDefaultReviews();
            }
        } catch (\Exception $e) {
            $reviews = $this->getDefaultReviews();
        }

        return view('pages.home', compact('gallery_images', 'reviews'));
    }

    private function getDefaultReviews()
    {
        return collect([
            (object)[
                'name' => 'Mark Harrison',
                'role' => 'Site Supervisor - Condo Development',
                'rating' => 4,
                'text' => app()->getLocale() === 'fr' 
                    ? "Pristovia a géré le nettoyage final de nos 150 unités avec une efficacité incroyable. Des pros." 
                    : "Pristovia handled the final clean of our 150-unit development with incredible efficiency. Absolute professionals."
            ],
            (object)[
                'name' => 'Sarah Jenkins',
                'role' => 'Operations Manager - Retail Plaza',
                'rating' => 5,
                'text' => app()->getLocale() === 'fr' 
                    ? "Leur service de maintenance commerciale est d'un niveau supérieur. Fiables et rigoureux." 
                    : "Their commercial maintenance service is next level. Reliable, thorough, and responsive."
            ],
            (object)[
                'name' => 'David Chen',
                'role' => 'Commercial Property Manager',
                'rating' => 5,
                'text' => app()->getLocale() === 'fr' 
                    ? "La référence pour le nettoyage post-construction dans le GTA. Ils connaissent les exigences du milieu." 
                    : "The go-to for post-construction cleaning in the GTA. They understand industry requirements and deadlines."
            ],
            (object)[
                'name' => 'Michael Ross',
                'role' => 'General Contractor',
                'rating' => 5,
                'text' => app()->getLocale() === 'fr' 
                    ? "Équipe sérieuse, conforme WSIB, et résultats impeccables. Un partenaire de confiance pour mes chantiers." 
                    : "Solid team, WSIB compliant, and flawless results. A trusted partner for all my construction sites."
            ],
        ]);
    }
}
