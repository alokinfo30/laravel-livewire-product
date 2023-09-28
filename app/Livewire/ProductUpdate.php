<?php        
namespace App\Livewire;
use Livewire\Component;
use App\Models\Product; // Import the Product model
use App\Actions\UpdateProductAction;

class ProductUpdate extends Component
{
    public $product;
    public $name;
    public $description;
    public $price;
    public $images = []; // Assuming you have an array for multiple images

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->images = $product->images; // Assuming you have a field for images in your model
    }

    public function updateProduct(UpdateProductAction $updateProductAction)
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

    public function render()
    {
        return view('livewire.product-update');
    }
}