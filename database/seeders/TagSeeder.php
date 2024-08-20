<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Tag::factory()->create([
            'name' => 'Empowerment'
        ]);

        \App\Models\Tag::factory()->create([
            'name' => 'Forgiveness'
        ]);

        \App\Models\Tag::factory()->create([
            'name' => 'Problem solving'
        ]);

        \App\Models\Tag::factory()->create([
            'name' => 'History & Heritage'
        ]);

        \App\Models\Tag::factory()->create([
            'name' => 'Bridge building'
        ]);

        \App\Models\Tag::factory()->create([
            'name' => 'Inner peace'
        ]);
    }
}
