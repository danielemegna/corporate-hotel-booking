<?php
namespace Qmates\CorporateHotelBooking;
class HotelBookingSystem
{

    /**
     * @var string
     */
    private $hotelId;

    public function __construct()
    {
    }

    public function bookRoom($hotelId, $roomType, $checkinDate, $checkoutDate): ?string
    {
        if ($this->hotelId == null) {
            return null;
        }
        return "bookingConfirmationId";
    }

    public function addHotel(string $hotelId, string $hotelName)
    {
        $this->hotelId = $hotelId;
    }
}