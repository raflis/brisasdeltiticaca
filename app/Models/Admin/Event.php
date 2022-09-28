<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $casts = [
        'images' => 'array',
    ];

    protected $fillable = [
        'category_id', 'name', 'slug', 'event_date', 'description', 
        'image1', 'image2', 'banner1',
        'banner2', 'map', 'images', 'link', 'featured',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
