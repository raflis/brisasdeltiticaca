<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';

    protected $fillable = [
        'title1', 'title2', 'image_desktop', 'image_mobile', 'button_name', 'button_link', 'order',
    ];
    
}
