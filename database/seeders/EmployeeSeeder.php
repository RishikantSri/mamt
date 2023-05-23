<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Employee\Employee::factory(5)->create();

        \App\Models\Employee\Employee::factory()->create([
            'name' => 'Test Employee',
            'email' => 'employee@employee.com',
        ]);
    }
}
