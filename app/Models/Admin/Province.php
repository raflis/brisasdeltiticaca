<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = [
        'name', 'department_id'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
