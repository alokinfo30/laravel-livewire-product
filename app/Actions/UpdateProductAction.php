<?php

namespace App\Actions;

use App\Models\Product;

class UpdateProductAction
{
    public function execute(Product $product, array $data)
    {

        // Update the product
        $product->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price'],
            'images' => $data['images'], // Assuming you have an array of image paths
        ]);

        return $product;
    }
}