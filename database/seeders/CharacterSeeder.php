<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Character;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $characters = [
            [
                'name' => 'Naruto Uzumaki',
                'rarity_id' => 1,
                'image_url' => 'https://example.com/image1.jpg',
                'description' => 'Description for Character 1',
            ],
            [
                'name' => 'Sasuke Uchiha',
                'rarity_id' => 2,
                'image_url' => 'https://example.com/image2.jpg',
                'description' => 'Description for Character 2',
            ],
        ];

        foreach($characters as $key => $value) {
            Character::create($value);
        }
    }
}
