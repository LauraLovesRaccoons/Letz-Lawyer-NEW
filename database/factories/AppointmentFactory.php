<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'start_datetime' => $this->faker->dateTimeBetween('now', '+7 days'),
            'end_datetime' => $this->faker->dateTimeBetween('now', '+7 days'),
            'google_calendar_event_id' => null, // This field can be populated when integrating with Google Calendar
        ];
    }
}

