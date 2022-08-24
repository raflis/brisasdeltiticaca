<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $casts = [
        'detail' => 'array',
    ];

    protected $fillable = [
        'user_id', 'amount', 'currency', 'purchase_number', 'card', 'transaction_date',
        'operationType', 'effectiveBrand', 'card', 'status',
        'detail', 'paid', 'user_name', 'user_lastname',
        'user_document', 'user_telephone', 'user_address', 'user_email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeStartdate($query, $name)
    {
        if($name):
            return $query->WhereDate('transaction_date', '>=', "$name");
        endif;
    }

    public function scopeEnddate($query, $name)
    {
        if($name):
            return $query->WhereDate('transaction_date', '<=', "$name");
        endif;
    }
    
}
