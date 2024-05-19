<?php

namespace Database\Seeders;

use App\Models\CurriculumVitae;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        CurriculumVitae::factory()->create([
        'job_title' => 'Network',
        'photo' => 'image.jpg',
        'first_name' => 'Kenzie',
        'last_name' => 'Nararya',
        'email' => 'kenzie@gmail.com',
        'phone' => '081234567890',
        'country' => 'Indonesia',
        'address' => 'Gebang',
        'date_birth' => '12/16/2004',
        'place_birth' => 'Surabaya',
        'skill' => 'Networking',
        'language' => 'Indonesia',
        'summary' => 'Saya bekerja di pt mencari cinta',
        'education' => '[EEPIS,SMKN1PUNGGING]',
        ]);
    }
}
