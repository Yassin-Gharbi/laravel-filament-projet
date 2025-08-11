<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    public function run()
    {
        Property::create([
            'name' => 'Villa Paradis',
            'description' => 'Une magnifique villa avec piscine et vue mer.',
            'price_per_night' => 200,
        ]);

        Property::create([
            'name' => 'Appartement cosy',
            'description' => 'Appartement confortable en plein centre-ville.',
            'price_per_night' => 80,
        ]);

        Property::create([
            'name' => 'Chalet montagne',
            'description' => 'Chalet chaleureux pour des vacances à la montagne.',
            'price_per_night' => 120,
        ]);
    }
}
