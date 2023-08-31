<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'recepient_name' => fake()->name(),
            'channel' => fake()->email(),
            'channel_type' => Arr::random(['email', 'sms']),
            'notification_body' => Str::random(100),
            'send_at' => fake()->dateTime(),
            'status' =>  Arr::random(['unscheduled', 'scheduled', 'sent', 'cancelled', 'error']),
            'workflow_id' => Str::random(12),
            'cancellation_workflow_id' => Str::random(12)
        ];
    }
}
