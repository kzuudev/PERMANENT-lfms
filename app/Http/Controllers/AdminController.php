<?php

namespace App\Http\Controllers;

use App\Models\AdminLostItem;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show the Admin dashboard
    public function index()
{
    $lostItems = AdminLostItem::all(); 
    return view('item-list', compact('lostItems'));
}
    
}
