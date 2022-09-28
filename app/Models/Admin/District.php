<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = [
        'name', 'province_id'
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
