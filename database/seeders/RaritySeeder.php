<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rarity;

class RaritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rarities = [
            [
                'name' => 'Common',
                'probability' => 0.6,
            ],
            [
                'name' => 'Uncommon',
                'probability' => 0.3,
            ],
            [
                'name' => 'Rare',
                'probability' => 0.25,
            ],
            [
                'name' => 'Epic',
                'probability' => 0.15,
            ],
            [
                'name' => 'Legendary',
                'probability' => 0.07,
            ],
            [
                'name' => 'Mythic',
                'probability' => 0.03,
            ],
        ];

        foreach($rarities as $key => $value) {
            Rarity::create($value);
        }
    }
}
