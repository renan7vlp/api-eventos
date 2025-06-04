<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RSVP;

class RSVPController extends Controller
{
    public function store(Request $request)
    {
       
        
        $rsvp = RSVP::create($request->all());
        return response()->json(['message' => 'Presença confirmada!', 'data' => $rsvp], 201);
    }
}
