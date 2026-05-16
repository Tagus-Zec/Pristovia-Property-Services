<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function postConstruction()
    {
        return view('pages.services.post-construction');
    }

    public function commercial()
    {
        return view('pages.services.commercial');
    }

    public function pressureWashing()
    {
        return view('pages.services.pressure-washing');
    }

    public function propertyMaintenance()
    {
        return view('pages.services.property-maintenance');
    }

    public function windowCleaning()
    {
        return view('pages.services.window-cleaning');
    }

    public function residentialCleaning()
    {
        return view('pages.services.residential');
    }
}
