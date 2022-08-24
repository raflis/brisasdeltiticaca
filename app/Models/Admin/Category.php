<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name', 'image', 'description', 'detail1', 'detail2', 'detail3', 'detail4', 'detail5',
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }
    
}
