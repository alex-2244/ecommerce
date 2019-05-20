<?php

use Illuminate\Database\Seeder;
use App\Shop;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $product1 = [
       	'title' => 'Product Title 1',
       	'imagePath' => 'https://cdn.vox-cdn.com/thumbor/qO1EWSlg7VkrRm6dsZPT8k1qvLk=/0x0:3508x2481/1200x800/filters:focal(1474x961:2034x1521)/cdn.vox-cdn.com/uploads/chorus_image/image/59319583/A182669_medium.0.jpg',
       	'description' => 'This is a longer card with supporting text below as a natural lead-in to additional content.',
       	'price' => 20
       ];
       $product2 = [
       	'title' => 'Product Title 2',
       	'imagePath' => 'https://cdn.motor1.com/images/mgl/9wpLb/s4/audi-pb-18-e-tron.jpg',
       	'description' => 'This is a longer card with supporting text below as a natural lead-in to additional content.',
       	'price' => 25
       ];
       $product3 = [
       	'title' => 'Product Title 3',
       	'imagePath' => 'https://cdn.motor1.com/images/mgl/Wrp6g/s3/2015-audi-r8-e-tron.jpg',
       	'description' => 'This is a longer card with supporting text below as a natural lead-in to additional content.',
       	'price' => 10
       ];
       $product4 = [
       	'title' => 'Product Title 4',
       	'imagePath' => 'https://www.engineering.com/Portals/0/BlogFiles/DesignerEdge/Photo%20of%20the%20DAy/dezeen_Audi-at-CES-2013_2.jpg',
       	'description' => 'This is a longer card with supporting text below as a natural lead-in to additional content.',
       	'price' => 29
       ];
       $product5 = [
       	'title' => 'Product Title 5',
       	'imagePath' => 'https://cdn.vox-cdn.com/thumbor/qO1EWSlg7VkrRm6dsZPT8k1qvLk=/0x0:3508x2481/1200x800/filters:focal(1474x961:2034x1521)/cdn.vox-cdn.com/uploads/chorus_image/image/59319583/A182669_medium.0.jpg',
       	'description' => 'This is a longer card with supporting text below as a natural lead-in to additional content.',
       	'price' => 18
       ];
       $product6 = [
       	'title' => 'Product Title 6',
       'imagePath' => 'https://www.engineering.com/Portals/0/BlogFiles/DesignerEdge/Photo%20of%20the%20DAy/dezeen_Audi-at-CES-2013_2.jpg',
       	'description' => 'This is a longer card with supporting text below as a natural lead-in to additional content.',
       	'price' => 22
       ];

       Shop::create($product1);
       Shop::create($product2);
       Shop::create($product3);
       Shop::create($product4);
       Shop::create($product5);
       Shop::create($product6);

    }
}
