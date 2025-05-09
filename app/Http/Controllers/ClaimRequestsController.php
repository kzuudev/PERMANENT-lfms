<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ClaimRequestsController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request input
        $request->validate([
            'item_name' => 'required|string|max:20',
            'claimant_name' => 'required|string|max:100',
            'claimant_email' => 'required|email|max:150',
            'claimed_item_description' => 'required|string|max:150',
            'claim_reason' => 'required|string|max:255',
        ]);
    
        // Get current authenticated user
        $currentUser = auth()->user();
    
        // Create the claim request with status
        $claimRequest = LostItemRequests::create([
            'item_name' => $request->item_name,
            'claimant_name' => $request->claimant_name,
            'claimant_email' => $request->claimant_email,
            'claimed_item_description' => $request->claimed_item_description,
            'claim_reason' => $request->claim_reason,
            'status' => 'Pending', // Set default status
            'reported_by_email' => $currentUser->email,
            'reporter_name' => $currentUser->name,
        ]);
    
        // Thank you message after submitting the claim request
        $greetings = "Thank you! We have received your claim request and will notify you if we find a match.";
    
        return redirect()->back()->with('message', $greetings);
    }
    
    public function claimRequest(){
        // Fetch all claim requests
        $claimRequests = LostItemRequests::all();
        
        // Pass the data to the view
        return view('claim-requests', compact('claimRequests'));  // Make sure you use 'claimRequests' here
    }
}
