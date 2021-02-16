<?php

use Illuminate\Database\Seeder;

class PhonebooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Phonebook::class, 5)->create();
    }
}
