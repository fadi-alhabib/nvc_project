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
            'name' => 'تمكين'
        ]);

        \App\Models\Tag::factory()->create([
            'name' => 'مسامحة'
        ]);

        \App\Models\Tag::factory()->create([
            'name' => 'حل مشاكل'
        ]);

        \App\Models\Tag::factory()->create([
            'name' => 'تاريخ وتراث'
        ]);

        \App\Models\Tag::factory()->create([
            'name' => 'بناء الجسور'
        ]);

        \App\Models\Tag::factory()->create([
            'name' => 'سلام داخلي'
        ]);
    }
}
