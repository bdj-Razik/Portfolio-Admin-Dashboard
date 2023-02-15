<?php

namespace Database\Seeders;

use App\Models\ContactMe;
use Illuminate\Database\Seeder;

class ContactMeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ContactMe::factory()->count(30)->create();

    }
}
