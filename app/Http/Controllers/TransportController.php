<?php

namespace App\Http\Controllers;
 
use App\Models\Transport; 

class TransportController extends Controller
{
    public function index()
    { 
        $transport = Transport::latest()->first(); 

        return view('services.transport', compact('transport'));
    }
}
