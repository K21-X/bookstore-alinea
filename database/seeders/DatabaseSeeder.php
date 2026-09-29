<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin AlineaPustaka',
            'email' => 'admin@alineapustaka.com',
            'password' => Hash::make('admin321'),
            'role' => 'admin',
            'phone' => '081381949010',
            'address' => 'Kantor Pusat AlineaPustaka, Jakarta'
        ]);

        User::create([
            'name' => 'Customer AlineaPustaka',
            'email' => 'customer@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'customer',
            'phone' => '089876543210',
            'address' => 'Jl. Budi Mulya No. 45, Jakarta'
        ]);

        $cat1 = Category::create(['name' => 'Teknologi', 'slug' => 'teknologi']);
        $cat2 = Category::create(['name' => 'Novel', 'slug' => 'novel']);
        $cat3 = Category::create(['name' => 'Bisnis & Finansial', 'slug' => 'bisnis-finansial']);
        $cat4 = Category::create(['name' => 'Komik', 'slug' => 'komik']);

        Book::create([
            'category_id' => $cat1->id,
            'title' => 'Mastering HTML & CSS',
            'author' => 'Novi Septiana',
            'description' => 'Panduan komprehensif membangun aplikasi web modern, terstruktur, dan scalable dengan ekosistem Laravel terkini.',
            'price' => 125000,
            'stock' => 20,
            'cover' => null
        ]);

        Book::create([
            'category_id' => $cat2->id,
            'title' => 'Satu Persen Kemungkinan',
            'author' => 'Zainudin Bachtera',
            'description' => 'Kisah inspiratif tentang perjuangan, mimpi, dan persahabatan di tengah hiruk-pikuk kota metropolitan.',
            'price' => 85000,
            'stock' => 15,
            'cover' => null
        ]);

        Book::create([
            'category_id' => $cat3->id,
            'title' => 'Langkah Kecil, Bisnis Besar',
            'author' => 'Arthur Morgan',
            'description' => 'Memahami pola pikir dan perilaku manusia terhadap uang serta cara mengelola aset dengan bijak.',
            'price' => 98000,
            'stock' => 25,
            'cover' => null
        ]);

        Book::create([
            'category_id' => $cat4->id,
            'title' => 'One Piece',
            'author' => 'Eiichiro Oda',
            'description' => 'Petualangan Monkey D Luffy dan kru bajak lautnya mencari harta karun raja bajak laut',
            'price' => 35000,
            'stock' => 30,
            'cover' => null
        ]);
    }
}
