<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LostItem;


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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('lostItem', 'public');
        }

        $user = auth()->user();

        $lostItems = LostItem::create([
            'item_name' => $request->item_name,
            'location_found' => $request->location_found,
            'item_description' => $request->item_description,
            'date_lost' => $request->date_lost,
            'image' => $imagePath,
            'reported_by_email' => $user->email,
            'reporter_name' => $user->name,
        ]);

        $greetings = "Thank You! We understand how important your item is. We'll notify you if a match is found — stay hopeful!";

        return redirect()->back()->with('message', $greetings);
    }


    public function index(){
        $lostItems = LostItem::all(); // Get all lost items from the database

        return view('item-list', compact('lostItems')); 
    }
}