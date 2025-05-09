<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LostItem extends Model
{
    use HasFactory;
        protected $table = 'lost_details';

        // Specify the fields that are mass assignable (optional)
        protected $fillable = [
            'item_name',
            'location_found',
            'item_description',
            'date_lost',
            'image',
            'reported_by_email',
            'reporter_name',    
            'selected_category',
        ];
}