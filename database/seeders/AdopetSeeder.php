<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pet;
use App\Models\PetCategory;
use App\Models\Shelter;

class AdopetSeeder extends Seeder
{
    public function run(): void
    {
        $cat = PetCategory::firstOrCreate([
            'name' => 'Kucing',
        ]);

        $dog = PetCategory::firstOrCreate([
            'name' => 'Anjing',
        ]);

        $shelter = Shelter::firstOrCreate(
            ['name' => 'Adopet Shelter'],
            [
                'address' => 'Surabaya, Jawa Timur',
                'phone' => '081200000000',
                'description' => 'Shelter hewan Adopet.',
            ]
        );

        $pets = [
            [
                'pet_category_id' => $cat->id,
                'name' => 'Milo',
                'breed' => 'Persian',
                'gender' => 'jantan',
                'age_months' => 12,
                'size' => 'Kecil',
                'description' => 'Milo merupakan kucing yang ramah dan suka bermain.',
                'image' => 'https://images.unsplash.com/photo-1573865526739-10659fec78a5?w=800',
            ],
            [
                'pet_category_id' => $dog->id,
                'name' => 'Bruno',
                'breed' => 'Golden Retriever',
                'gender' => 'jantan',
                'age_months' => 24,
                'size' => 'Besar',
                'description' => 'Bruno merupakan anjing yang aktif dan bersahabat.',
                'image' => 'https://images.unsplash.com/photo-1552053831-71594a27632d?w=800',
            ],
            [
                'pet_category_id' => $cat->id,
                'name' => 'Luna',
                'breed' => 'Domestic',
                'gender' => 'betina',
                'age_months' => 8,
                'size' => 'Kecil',
                'description' => 'Luna adalah kucing yang manja dan tenang.',
                'image' => 'https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?w=800',
            ],
            [
                'pet_category_id' => $dog->id,
                'name' => 'Max',
                'breed' => 'Shiba Inu',
                'gender' => 'jantan',
                'age_months' => 18,
                'size' => 'Sedang',
                'description' => 'Max adalah anjing yang ceria dan aktif.',
                'image' => 'https://images.unsplash.com/photo-1551717743-49959800b1f6?w=800',
            ],
        ];

        foreach ($pets as $pet) {
            Pet::firstOrCreate(
                ['name' => $pet['name']],
                array_merge($pet, [
                    'shelter_id' => $shelter->id,
                    'health_status' => 'Sehat',
                    'status' => 'tersedia',
                ])
            );
        }
    }
}
