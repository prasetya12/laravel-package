<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Fesh milk 250ml',
                'price' => 250,
                'description' => 'lorem ipsum',
                'image' => 'https://cdn.pixabay.com/photo/2016/12/06/18/27/milk-1887234__340.jpg'
            ],
            [
                'name' => '12 Egs',
                'price' => 6,
                'description' => 'lorem ipsum',
                'image' => 'https://cdn.pixabay.com/photo/2016/07/23/15/24/egg-1536990__340.jpg'
            ],
            [
                'name' => 'Wine 500ml',
                'price' => 50,
                'description' => 'lorem ipsum',
                'image' => 'https://cdn.pixabay.com/photo/2015/11/07/12/00/alcohol-1031713__340.png'
            ],
            [
                'name' => 'Homey 100ml',
                'price' => 12,
                'description' => 'lorem ipsum',
                'image' => 'https://cdn.pixabay.com/photo/2017/01/06/17/49/honey-1958464__340.jpg'
            ]
        ];
        Product::insert($products);
    }
}