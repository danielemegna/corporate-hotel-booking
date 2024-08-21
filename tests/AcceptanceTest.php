<?php

use PHPUnit\Framework\TestCase;
use Qmates\CorporateHotelBooking\Booking;

class AcceptanceTest extends TestCase {

    /** @test */
    public function shouldFoo() {
        $hotelId = $this->givenAnHotel();
        $employeeId = $this->givenAnEmployee();

        $checkinDate = DateTime::createFromFormat('d/m/Y', '23/05/2013');
        $checkoutDate = DateTime::createFromFormat('d/m/Y', '24/05/2013');

        $booking = $this->tryToBookRoom($employeeId, $hotelId, "DOUBLE_ROOM", $checkinDate, $checkoutDate);

        $this->assertNotNull($booking);
    }

    private function givenAnHotel(): string {
        return "anyHotel";
    }

    private function givenAnEmployee(): string {
        return "anyEmployee";
    }

    private function tryToBookRoom($employeeId, $hotelId, $roomType, $checkinDate, $checkoutDate): ?Booking {
        return new Booking();
    }
}
