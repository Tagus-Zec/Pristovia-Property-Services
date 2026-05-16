<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Arial', sans-serif; color: #333; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #002147; border-top: 10px solid #002147; }
        .header { text-align: center; margin-bottom: 30px; }
        .label { font-weight: bold; color: #002147; display: block; margin-top: 15px; }
        .value { color: #555; background: #f9f9f9; padding: 10px; border-radius: 4px; display: block; }
        .footer { text-align: center; margin-top: 30px; font-size: 0.8em; color: #888; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 style="color: #002147;">New Quote Request</h1>
            <p>Pristovia Premium Services - Commercial Property Care</p>
        </div>

        <span class="label">Client Name:</span>
        <span class="value">{{ $quote->full_name }}</span>

        <span class="label">Email:</span>
        <span class="value">{{ $quote->email }}</span>

        <span class="label">Phone:</span>
        <span class="value">{{ $quote->phone }}</span>

        <span class="label">Property Type:</span>
        <span class="value">{{ $quote->property_type }}</span>

        <span class="label">Service Requested:</span>
        <span class="value">{{ $quote->service_requested }}</span>

        <span class="label">Location:</span>
        <span class="value">{{ $quote->location }} @if($quote->other_city) ({{ $quote->other_city }}) @endif</span>

        <span class="label">Property Condition:</span>
        <span class="value">{{ $quote->property_condition }}</span>

        <span class="label">Preferred Date:</span>
        <span class="value">{{ $quote->preferred_date }}</span>

        <span class="label">Additional Message:</span>
        <span class="value">{{ $quote->final_message ?? 'No message provided.' }}</span>

        <div class="footer">
            &copy; {{ date('Y') }} Pristovia Services. All rights reserved.
        </div>
    </div>
</body>
</html>
