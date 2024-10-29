<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'account_id',
        'category_id',
        'amount',
        'income_date',
        'description'
    ];

    /**
     * Relationships
     */

    // Income belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Income is categorized, e.g., "Salary," "Freelance," etc.
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
