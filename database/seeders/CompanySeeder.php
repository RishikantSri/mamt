<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Company\Company::factory(5)->create();

        \App\Models\Company\Company::factory()->create([
            'name' => 'Test Company',
            'email' => 'company@company.com',
        ]);
    }
}
