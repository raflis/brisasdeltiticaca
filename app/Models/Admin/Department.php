<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = [
        'name'
    ];
}
