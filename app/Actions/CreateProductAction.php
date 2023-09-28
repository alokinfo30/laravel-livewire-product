<?php
namespace App\Actions;

use App\Models\Product;

class CreateProductAction
{

    public function execute(array $data)
    {
        // echo $data;
        

       // dd($data);
                // Create a new product
        $product = Product::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price'],
            // 'images' => $data['images'], // Assuming you have an array of image paths
        ]);

        return $product;
    }
}