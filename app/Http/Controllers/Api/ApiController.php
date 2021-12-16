<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HotelResource;
use App\Models\Hotel;

class ApiController extends Controller
{
    public function hotelDetail($id)
    {
        return HotelResource::make(Hotel::with('reviews')->where('status', Hotel::ACTIVE)->findOrFail($id));
    }
}
