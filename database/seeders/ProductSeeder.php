<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'name' => "Yellow T-Shirt",
            'price' => 75000,
            'image_url' => "product_image/yellowShirt.jpg",
            'description' => "Suitable for adults, size: XL",
            'categoryID' => 1
        ]);
        Product::create([
            'name' => "Varsity Jacket",
            'price' => 500000,
            'image_url' => "product_image/varsityJacket.jpg",
            'description' => "Suitable for teenagers, size: L",
            'categoryID' => 1
        ]);
        Product::create([
            'name' => "Black T-Shirt",
            'price' => 70000,
            'image_url' => "product_image/blackShirt.jpg",
            'description' => "Suitable for kids, size: S",
            'categoryID' => 1
        ]);
        Product::create([
            'name' => "Blue Short",
            'price' => 150000,
            'image_url' => "product_image/blueShort.jpg",
            'description' => "Suitable for adults, size: L",
            'categoryID' => 1
        ]);

        Product::create([
            'name' => "Navy Hoodie",
            'price' => 679000,
            'image_url' => "product_image/navyHoodie.jpg",
            'description' => "Suitable for adults, size: M",
            'categoryID' => 1
        ]);

        Product::create([
            'name' => "White T-Shirt",
            'price' => 70000,
            'image_url' => "product_image/whiteShirt.jpg",
            'description' => "Suitable for kids, size: L",
            'categoryID' => 1
        ]);
        Product::create([
            'name' => "Black Short",
            'price' => 150000,
            'image_url' => "product_image/blackShort.jpg",
            'description' => "Suitable for kids, size: L",
            'categoryID' => 1
        ]);
        Product::create([
            'name' => "Blue Skirt",
            'price' => 129000,
            'image_url' => "product_image/denimSkirt.jpg",
            'description' => "Suitable for adult, size: M",
            'categoryID' => 2
        ]);

        Product::create([
            'name' => "Red Polo Shirt",
            'price' => 120000,
            'image_url' => "product_image/redPolo.jpg",
            'description' => "Suitable for adult, size: XL",
            'categoryID' => 1
        ]);

        Product::create([
            'name' => "Black Polo Shirt",
            'price' => 120000,
            'image_url' => "product_image/blackPolo.jpg",
            'description' => "Suitable for adult, size: M",
            'categoryID' => 1
        ]);

        Product::create([
            'name' => "Smooth Jersey Lined Parka",
            'price' => 599000,
            'image_url' => "product_image/jaketcewe1.png",
            'description' => "Suitable for woman, size: M",
            'categoryID' => 2
        ]);

        Product::create([
            'name' => "Jersey Short Jacket",
            'price' => 499000,
            'image_url' => "product_image/bajucewe1.png",
            'description' => "Suitable for woman, size: M",
            'categoryID' => 2
        ]);

        Product::create([
            'name' => "Long Striped Gown",
            'price' => 499000,
            'image_url' => "product_image/gaun1.png",
            'description' => "Suitable for woman, size: M",
            'categoryID' => 2
        ]);

        Product::create([
            'name' => "Black Long Hoodie",
            'price' => 679000,
            'image_url' => "product_image/dresshoodie_cewe.png",
            'description' => "Suitable for woman, size: M",
            'categoryID' => 2
        ]);

        Product::create([
            'name' => "Brown Skirt",
            'price' => 120000,
            'image_url' => "product_image/rokcewe_2.png",
            'description' => "Suitable for woman, size: M",
            'categoryID' => 2
        ]);

        Product::create([
            'name' => "Black Gown",
            'price' => 250000,
            'image_url' => "product_image/gaun2.png",
            'description' => "Suitable for woman, size: M",
            'categoryID' => 2
        ]);

        Product::create([
            'name' => "Long White Skirt",
            'price' => 120000,
            'image_url' => "product_image/rokcewe_1.png",
            'description' => "Suitable for woman, size: M",
            'categoryID' => 2
        ]);
    }
}
