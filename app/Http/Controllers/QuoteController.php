<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'property_type' => 'required|string',
            'service_type' => 'required|string',
            'location' => 'required|string',
            'other_city' => 'nullable|string|max:255',
            'condition' => 'required|string',
            'preferred_date' => 'required|date',
            'message' => 'nullable|string',
            'project_size' => 'nullable|string',
            'website_hp' => 'nullable|string|max:0',
        ]);

        // Anti-spam time protection
            if (time() - (int)$request->form_time < 3) {

                return response()->json([
                    'success' => false,
                    'message' => 'Spam protection triggered.'
                ], 429);

            }
            

        try {
            // Mapping to old database structure if needed, or update migration
            $quote = Quote::create([
                'full_name' => $validated['full_name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'property_type' => $validated['property_type'],
                'service_requested' => $validated['service_type'], // Mapping
                'location' => $validated['location'],
                'other_city' => $validated['other_city'],
                'property_condition' => $validated['condition'], // Mapping
                'preferred_date' => $validated['preferred_date'],
                'final_message' => $validated['message'] . " (Size: " . $validated['project_size'] . ")",
                'website_hp' => $validated['website_hp'],
            ]);
                          

                $messageContent = "
                New Quote Request

                Name: {$quote->full_name}
                Email: {$quote->email}
                Phone: {$quote->phone}
                Property Type: {$quote->property_type}
                Service Requested: {$quote->service_requested}
                Location: {$quote->location}
                Preferred Date: {$quote->preferred_date}

                Message:
                {$quote->final_message}
                ";

                // 1. Mail ADMIN
                Mail::raw($messageContent, function ($message) use ($quote) {
                    $message->to('ezechielnjondo5@gmail.com')
                            ->subject('New Quote Request | Pristovia Property Services Inc.');
                });

                // 2. Mail CLIENT (copie automatique)
                Mail::raw("
                Hello {$quote->full_name},

                We have received your quote request.

                Here is a copy of your message:

                {$messageContent}

                Our team will contact you soon.

                Thank you.
                Pristovia Property Services Inc.
                ", function ($message) use ($quote) {
                    $message->to($quote->email)
                            ->subject('Copy of your request | Pristovia Property Services Inc.');
                });

        //    Mail::raw("
        //     New Quote Request

        //     Name: {$quote->full_name}
        //     Email: {$quote->email}
        //     Phone: {$quote->phone}
        //     Property Type: {$quote->property_type}
        //     Service Requested: {$quote->service_requested}
        //     Location: {$quote->location}
        //     Preferred Date: {$quote->preferred_date}

        //     Message:
        //     {$quote->final_message}

        //     ", function ($message) {

        //         $message->to('ezechielnjondo5@gmail.com')
        //                 ->subject('New Quote Request | Pristovia Property');
        //     });



            return response()->json([
                'success' => true,
                'message' => 'Your quote request has been successfully submitted. Our team will contact you shortly.'
            ]);

        } catch (\Exception $e) {
            Log::error('Quote Submission Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while submitting your request. Please try again later.'
            ], 500);
        }
    }
}
