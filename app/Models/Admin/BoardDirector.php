<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardDirector extends Model
{
    use HasFactory;

    protected $table = 'board_directors';

    protected $fillable = [
        'name', 'position', 'image', 'image_mini', 'order',
    ];
    
}
