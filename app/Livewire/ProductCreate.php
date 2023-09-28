<?php
namespace App\Livewire;
use Livewire\Component;
use App\Actions\CreateProductAction;
use Livewire\WithFileUploads;


class ProductCreate extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $price;
    public $images = []; // Assuming you have an array for multiple images

    public function createProduct(CreateProductAction $createProductAction)
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

    public function render()
    {
        return view('livewire.product-create');
    }
}