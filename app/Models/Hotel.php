<?php

namespace App\Models;

use App\Models\HotelReview;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    const ACTIVE = 1;
    const IN_ACTIVE = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'rating',
        'address',
        'supplier',
        'status',
    ];

    /**
     * Get the reviews for the hotel.
     */
    public function reviews()
    {
        return $this->hasMany(HotelReview::class);
    }
}
