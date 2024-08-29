<?php

namespace Qmates\CorporateHotelBooking;

class HotelBookingSystem
{
    /** @var string[] */
    private $storedHotelIds = [];

    public function bookRoom($hotelId, $roomType, $checkinDate, $checkoutDate): ?string {
        if (!$this->hotelIdExists($hotelId)) {
            return null;
        }

        return "bookingConfirmationId";
    }

    public function addHotel(string $hotelId, string $hotelName): void {
        $this->storedHotelIds[] = $hotelId;
    }

    private function hotelIdExists(string $hotelId): bool {
        return in_array($hotelId, $this->storedHotelIds);
    }
}

