<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Hotel;

class HotelTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_hotel_detail()
    {
        $hotel = Hotel::where('status', 1)->get()->random(1)->first();
        $response = $this->get('/api/hotel_detail/'.$hotel->id);

        $response->assertStatus(200);
    }
}
