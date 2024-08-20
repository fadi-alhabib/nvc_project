<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\State::factory()->create([
            'name' => 'Damascus'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'Homs'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'Tartous'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'Lattakia'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'Aleppo'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'Deir Ezzor'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'Rif Dimashq'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'Quneitra'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'Idleb'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'Sweida'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'Daraa'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'al Raqqa'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'al Hasaka'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'Hama'
        ]);
    }
}
