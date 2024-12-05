<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Validation\ValidationException;

class LeadController extends Controller
{
    //
    public function showLeadList()
    {
        return view('components.leadlist');
        
    }
    public function store(Request $request)
    {
        try {
            // Validate incoming request
            $request->validate([
                'customer_name' => 'required|string|max:255',
                'customer_phone' => 'required|string|max:15',
                'customer_address' => 'required|string',
                'user_id' => 'required|exists:users,id'  // Ensure user exists
            ]);
    
            // Create the lead if validation passes
            $lead = Lead::create([
                'customer_name' => $request->customer_name,
                'customer_phone' => $request->customer_phone,
                'customer_address' => $request->customer_address,
                'user_id' => $request->user_id
            ]);
    
            return response()->json($lead, 201);  // Return the created lead with a 201 status
    
        } catch (ValidationException $e) {
            // Return the validation errors if validation fails
            return response()->json([
                'error' => 'Validation failed',
                'message' => $e->getMessage(),
                'errors' => $e->errors()
            ], 422);  // Return 422 with the error details
        }
    }
}
