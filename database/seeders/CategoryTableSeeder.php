<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 登録するレコードの準備
        $categories = [
            ['title' => 'programming'],
            ['title' => 'design'],
            ['title' => 'managemment'],
        ];

        // 登録処理
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
