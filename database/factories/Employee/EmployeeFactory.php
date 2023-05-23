<?php

namespace Database\Factories\Employee;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee\Employee>
 */
class EmployeeFactory extends Factory
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
            'company_id' => \App\Models\Company\Company::all()->random()->id,
            'employee_id' => 'EMP' . Str::random(10),
            'name' => fake()->name(),
            'mobile'=> fake()->unique()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),    
            'designation' => fake()->randomElement(['Fresher' ,'Middle', 'Senior','Expert']),
            'experience' => fake()->randomElement([1 ,2, 3]),
            'qualification' => fake()->randomElement(['Graduate' ,'Master', 'PG', 'Diploma']),
            'status' => fake()->randomElement(['Pending' ,'Active', 'Cancelled']),
            'fcm_token'=> 'FCM' . Str::random(10),
            'device_token'=> 'DTK' . Str::random(10),    
            'reporting_to'=>fake()->randomElement(['Senior Manager' ,'CEO', 'Supervisior']),
            'grade' => fake()->randomElement([1 ,2, 3]),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),

        ];
    }
}
