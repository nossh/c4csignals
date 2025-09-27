<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscription extends Model
{
    use HasFactory;

    // Table name (if not pluralized correctly)
    protected $table = 'subscriptions'; 

    // Primary key is a string (uuid)
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'user_id',
        'plan_name',
        'cycle',
        'price',
        'payment_status',
        'sub_status',
        'expiring_date',
    ];

    /**
     * A subscription belongs to a user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
