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
        $leads = Lead::all();
        return view('components.leadlist', compact('leads'));
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'customer_name' => 'required|string|max:255',
                'customer_phone' => 'required|string|max:15',
                'customer_address' => 'required|string',
                'user_id' => 'required|exists:users,id'  
            ]);
    
            $lead = Lead::create([
                'customer_name' => $request->customer_name,
                'customer_phone' => $request->customer_phone,
                'customer_address' => $request->customer_address,
                'user_id' => $request->user_id
            ]);
    
            return response()->json($lead, 201);  
    
        } catch (ValidationException $e) {
            return response()->json([
                'error' => 'Validation failed',
                'message' => $e->getMessage(),
                'errors' => $e->errors()
            ], 422); 
        }
    }
}
