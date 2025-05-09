<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\GoogleAuthController;
use Illuminate\Http\RedirectResponse;
use App\Models\LostItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class LostItemController extends Controller
{
    public function store(Request $request)
    {

        // dd($request->all());

        $request->validate([
            'item_name' => 'required|string|max:20',
            'location_found' => 'required|string|max:100',
            'item_description' => 'required|string|max:150',
            'date_lost' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'selected_category' => 'required|string|max:255',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('lostItem', 'public');
        }

        $currentUser = auth()->user();

        $lostItems = LostItem::create([
            'item_name' => $request->item_name,
            'location_found' => $request->location_found,
            'item_description' => $request->item_description,
            'date_lost' => $request->date_lost,
            'image' => $imagePath,
            'reported_by_email' => $currentUser->email,
            'reporter_name' => $currentUser->name,
            'selected_category' => $request->selected_category,
        ]);

        $greetings = "Thank You! We understand how important your item is. We'll notify you if a match is found — stay hopeful!";

        return redirect()->back()->with('message', $greetings);
    }

    public function itemList(){
        $lostItems = LostItem::all();
        return view('item-list', compact('lostItems'));
    }
    
    public function manageItems(){
        $lostItems = LostItem::all();
        return view('manage-items', compact('lostItems'));
    }

    public function claimRequest(){
        $claimRequests = LostItem::all();
        return view('claim-requests', compact('claimRequests'));
    }

}
