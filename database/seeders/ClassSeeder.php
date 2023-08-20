<?php

namespace Database\Seeders;

use App\Models\Clases;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clases::factory(5)->create();

        Clases::create([
            'uuid' => Str::uuid(),
            'code' => 'IPA2021-1',
            'name' => 'X-IPA-1',
            'capacity' => 30,
        ]);
    }
}
