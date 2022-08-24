<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;

    protected $table = 'workshops';

    protected $casts = [
        'images' => 'array',
    ];

    protected $fillable = [
        'name', 'description', 'image', 'images', 'button_name', 
        'button_link', 'title1', 'description1',
        'title2', 'description2', 'title3',
        'description3','title4', 'description4', 'title5', 'description5',
        'title6', 'description6', 'order',
    ];

    public function workshop_events()
    {
        return $this->hasMany(WorkshopEvent::class);
    }
    
}
