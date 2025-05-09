<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLostItem extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'lost_items';

    // Specify the fillable attributes for mass assignment
    protected $fillable = [
        'category',
        'student_name',
        'item_name',
        'date_reported',
        'location_found',
        'image_url',
        'turned_by',
    ];
}
