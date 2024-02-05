<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Produit;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'login' => 'admin',
            'password' => Hash::make('admin'),
            'type' => 'administrateur',
        ]);
        User::factory()->create([
            'login' => 'fadil',
            'password' => Hash::make('1111'),
            'type' => 'user',
        ]);
        User::factory()->create([
            'login' => 'teste',
            'password' => Hash::make('teste'),
            'type' => 'user',
        ]);
        User::factory()->create([
            'login' => 'user',
            'password' => Hash::make('user'),
            'type' => 'user',
        ]);
        User::factory()->create([
            'login' => 'user05',
            'password' => Hash::make('0000'),
            'type' => 'user',
        ]);


        Type::factory()->create([
            'name' => 'Electronique'
        ]);
        Type::factory()->create([
            'name' => 'Eletricite'
        ]);
        Type::factory()->create([
            'name' => 'Informatique'
        ]);

        Produit::factory()->create([
            'RefPdt'=>'P003',
            'libPdt'=>'SMART PHONE',
            'Prix'=>'5780',
            'Qte'=>'10',
            'description'=>'SMART PHONE',
            'image'=>'iphone.jpg',
            'type_id'=>1
        ]);
        Produit::factory()->create([
            'RefPdt'=>'P001',
            'libPdt'=>'Smart TV',
            'Prix'=>'450',
            'Qte'=>'5',
            'description'=>'Smart tv marque SONY',
            'image'=>'photos/tvsmart.jpg',
            'type_id'=>1
        ]);
        Produit::factory()->create([
            'RefPdt'=>'P002',
            'libPdt'=>'Smart TV',
            'Prix'=>'5000',
            'Qte'=>'3',
            'description'=>'Smart tv marque lg',
            'image'=>'photos/tvsmartlg.jpg',
            'type_id'=>1
        ]);
    }
}
