<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Example of seeding data into the 'patients' table
        DB::table('patients')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10) . '@example.com',
            'phone' => '1234567890',
            'address' => Str::random(50),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add more records if needed
        // You can use a loop to create multiple records
    }
}
