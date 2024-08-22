<?php

use PHPUnit\Framework\TestCase;
use Qmates\CorporateHotelBooking\Booking;

class AcceptanceTest extends TestCase {

    /** @test */
    public function doubleRoomBookingHappyPath() {
        $hotelId = $this->givenAnHotel();

        $checkinDate = DateTime::createFromFormat('d/m/Y', '23/05/2013');
        $checkoutDate = DateTime::createFromFormat('d/m/Y', '24/05/2013');

        $booking = $this->tryToBookRoom($hotelId, "DOUBLE_ROOM", $checkinDate, $checkoutDate);

        $this->assertNotNull($booking);
    }

    private function givenAnHotel(): string {
        return "anyHotel";
    }

    private function tryToBookRoom($hotelId, $roomType, $checkinDate, $checkoutDate): string {
        return "bookingConfirmationId";
    }
}
