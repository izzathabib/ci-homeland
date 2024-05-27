<?php

namespace App\Controllers;
use App\Models\Property\Property;

class Home extends BaseController
{
    public function index(): string
    {
        // Create instances for property model
        $property = new Property();
        // Fetch data
        $propData = $property ->findAll();
        
        return view('home', compact('propData'));
    }
}
