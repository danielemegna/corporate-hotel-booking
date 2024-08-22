<?php

use PHPUnit\Framework\TestCase;
use Qmates\CorporateHotelBooking\Booking;
use Qmates\CorporateHotelBooking\HotelBookingSystem;

class AcceptanceTest extends TestCase {
    /** @var HotelBookingSystem */
    private $hotelBookingSystem;

    protected function setUp(): void
    {
        $this->hotelBookingSystem = new HotelBookingSystem();
    }


    /** @test */
    public function doubleRoomBookingHappyPath() {
        $hotelId = $this->givenAnHotel();

        $checkinDate = DateTime::createFromFormat('d/m/Y', '23/05/2013');
        $checkoutDate = DateTime::createFromFormat('d/m/Y', '24/05/2013');

        $booking = $this->tryToBookRoom($hotelId, "DOUBLE_ROOM", $checkinDate, $checkoutDate);

        $this->assertNotNull($booking);
    }

    /** @test */
    public function hotelNotExisting() {
        $checkinDate = DateTime::createFromFormat('d/m/Y', '23/05/2013');
        $checkoutDate = DateTime::createFromFormat('d/m/Y', '24/05/2013');

        $booking = $this->tryToBookRoom("notExistingHotel", "DOUBLE_ROOM", $checkinDate, $checkoutDate);

        $this->assertNull($booking);
    }

    private function givenAnHotel(): string {
        $this->hotelBookingSystem->addHotel("hotelId", "hotelName");
        return "hotelId";
    }

    private function tryToBookRoom($hotelId, $roomType, $checkinDate, $checkoutDate): ?string {
        return $this->hotelBookingSystem->bookRoom($hotelId, $roomType, $checkinDate, $checkoutDate);
    }
}
