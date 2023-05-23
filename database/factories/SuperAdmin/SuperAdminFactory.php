<?php

namespace Database\Factories\SuperAdmin;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SuperAdmin\SuperAdmin>
 */
class SuperAdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'mobile'=> fake()->unique()->phoneNumber(),
            'gst'=>  'GST' . Str::random(10),
            'email_verified_at' => now(),
            'company' => fake()->company(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'fcm_token'=> Str::random(10),
            'device_token'=> Str::random(10),

            
        ];
    }
}
