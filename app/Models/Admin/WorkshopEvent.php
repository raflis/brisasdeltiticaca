<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopEvent extends Model
{
    use HasFactory;

    protected $table = 'workshop_events';

    protected $casts = [
        'images' => 'array',
    ];

    protected $fillable = [
        'workshop_id', 'name', 'slug', 'event_date', 'description', 
        'image1', 'image2', 'banner1',
        'banner2', 'images', 'price', 'stock',
    ];

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
    
}
