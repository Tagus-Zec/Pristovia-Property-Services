<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('New Quote Request from ' . $this->data['full_name'])
                    ->html($this->generateHtml());
    }

    protected function generateHtml()
    {
        $html = "<h2>New Quote Request Details</h2>";
        $html .= "<ul>";
        foreach ($this->data as $key => $value) {
            if ($key !== 'website_hp' && $value) {
                $html .= "<li><strong>" . ucfirst(str_replace('_', ' ', $key)) . ":</strong> " . e($value) . "</li>";
            }
        }
        $html .= "</ul>";
        return $html;
    }
}
