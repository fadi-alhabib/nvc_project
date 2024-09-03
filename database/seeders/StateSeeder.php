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
            'name' => 'دمشق'
        ]);
//test
        \App\Models\State::factory()->create([
            'name' => 'حمص'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'طرطوس'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'اللاذقية'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'حلب'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'دير الزور'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'ريف دمشق'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'القنيطرة'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'إدلب'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'السويداء'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'درعا'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'الرقة'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'الحسكة'
        ]);

        \App\Models\State::factory()->create([
            'name' => 'حماة'
        ]);
    }
}
