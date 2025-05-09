<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LostItemRequest extends Model
{
    use HasFactory;

    // Defining the fillable attributes for mass assignment
    protected $fillable = 'lost_item_requests';

    // Method to get the lost item associated with the claim (optional if you need further logic)
    public function lostDetail()
    {
        return $this->belongsTo(LostDetail::class, 'item_name', 'item_name');
    }
}
