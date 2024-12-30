<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    public function getAllProducts()
    {
        return Product::with('category')->get();
    }

    public function createProduct($data)
    {
        $product = new Product();
        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->price = $data['price'];
        $product->category_id = $data['category_id'];

        if (isset($data['image'])) {
            $imagePath = $data['image']->store('products', 'public');
            $product->image = $imagePath;
        }

        $product->save();
        return $product;
    }

    public function updateProduct(Product $product, $data)
    {
        if (isset($data['image'])) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $imagePath = $data['image']->store('products', 'public');
            $product->image = $imagePath;
        }

        $product->update($data);
        return $product;
    }

    public function deleteProduct(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
    }
}
