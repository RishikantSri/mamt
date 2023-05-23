<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\SuperAdmin\SuperAdmin::factory(5)->create();

        \App\Models\SuperAdmin\SuperAdmin::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@admin.com',
        ]);
    }
}
