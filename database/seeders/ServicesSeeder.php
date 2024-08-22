<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $productCategoryIds = DB::table('categories')->pluck('id'); 
        Service::create([
            'name' => 'Animal Daycare',
            'slug' => 'Doggy daycare',
            'description' => 'Service provided for owners to drop off their pets when they are unable to watch them',
            'image' => 'daycare.jpeg',
            'price' => 400.00,
            'notes' => 'Choose a variety of types animal.',
            'allergens' => null, // No allergens in this service
            'benefits' => 'allow your dog to socialise and just be a dog.',
            'aftercare_tips' => 'Avoid harsh chemicals on dog fur.',
            'cautions' => null, // No specific cautions for this service
//            'duration_minutes' => 90, // Duration in minutes
            'category_id' => $faker->randomElement($productCategoryIds),
            'is_hidden' => false,
        ]);

        Service::create([
            'name' => 'Consulting',
            'slug' => 'Animal behavior consulting',
            'description' => 'offer specialized training and behavior modification focused on Care with Consent, cooperative care.',
            'image' => 'consult.png',
            'price' => 100.00,
            'notes' => 'Consult with our veterinary nurse about your pet behavior.',
            'allergens' => 'Dog allergy and basic syptomss',
            'benefits' => 'Get to know more about your animal behavior and understand them better',
            'aftercare_tips' => 'Do not be afraid of weird symptoms, tell us about risk signal beforehand',
            'cautions' => 'Care about your pet meal and food nutrition.',
//            'duration_minutes' => 120, // Duration in minutes
            'category_id' => $faker->randomElement($productCategoryIds),
            'is_hidden' => false,
        ]);

        Service::create([
            'name' => 'Checkup',
            'slug' => 'examinations and Diagnosis',
            'description' => 'routine wellness exams for pets and they are your cat or dogs best opportunity to achieve long-term health and a high-quality life. ',
            'image' => 'checkup.jpeg',
            'price' => 300.00,
            'notes' => 'Recommended for old pet and should routine checkup oftenly.',
            'allergens' => null, // No allergens in this service
            'benefits' => 'Find signs of any health problems your cat or dog could be experiencing. ',
            'aftercare_tips' => 'Use the recommended perscription pill for specific illness.',
            'cautions' => null, // No specific cautions for this service
//            'duration_minutes' => 60, // Duration in minutes
            'category_id' => $faker->randomElement($productCategoryIds),
            'is_hidden' => false,
        ]);


        Service::create([
            'name' => 'Emergency care',
            'slug' => 'emergency vet services ',
            'description' => 'Advanced diagnostic tools and treatment facilities to handle critical cases effectively',
            'image' => 'emergency.jpeg',
            'price' => 1500.00,
            'notes' => 'Ensure continuity of care for your pet. ',
            'allergens' => 'Adjust treatment plans as needed',
            'benefits' => 'Accurate diagnoses and provide timely interventions to save your pet’s life.',
            'aftercare_tips' => 'Take care of your pet and be nice with them',
            'cautions' => null, // No specific cautions for this service
//            'duration_minutes' => 45, // Duration in minutes
            'category_id' => $faker->randomElement($productCategoryIds),
            'is_hidden' => false,
        ]);





    }
}
