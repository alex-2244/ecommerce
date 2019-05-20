<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Product::class, 30)->create();

        // $p1 = [
        // 	'name' => 'Learn to build website in HTML5',
        // 	'image' => 'uploads/products/bag.jpg',
        // 	'price' => 5000,
        // 	'description' => ' Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document without relying'
        // ];

        // $p2 = [
        // 	'name' => 'PHP development in depth',
        // 	'image' => 'uploads/products/book.jpg',
        // 	'price' => 2500,
        // 	'description' => ' Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document without relying'
        // ];

        // Product::create($p1);
        // Product::create($p2);
    }
}
