<?php

namespace App\Livewire;
use Livewire\Component;
use App\Actions\CreateProductAction;
use App\Actions\UpdateProductAction;
use Livewire\WithFileUploads;

class Product extends Component
{
    use WithFileUploads;

    public function render()
    {
        return view('livewire.product');
    }

    public $name;
    public $description;
    public $price;
    public $images = []; // Assuming you have an array for multiple images

    public function create(CreateProductAction $createProductAction)
    {

        // Call the action class to create the product
        $product = $createProductAction->execute([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'images' => $this->images,
        ]);

        // Reset input fields or perform other actions
        $this->resetFields();

        // Optionally, redirect to a success page or display a success message
        session()->flash('success', 'Product created successfully.');
    }

    public function resetFields()
    {
        $this->name = '';
        $this->description = '';
        $this->price = '';
        $this->images = [];
    }

    public function list()
    {
        return view('livewire.product-list', [
            'products' => $this->products,
        ]);
    }

    public function update(UpdateProductAction $updateProductAction)
    {
        // Validation and other logic can be added here

        // Call the action class to update the product
        $updatedProduct = $updateProductAction->execute($this->product, [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'images' => $this->images,
        ]);

        // Optionally, redirect to a success page or display a success message
        session()->flash('success', 'Product updated successfully.');
    }


}
