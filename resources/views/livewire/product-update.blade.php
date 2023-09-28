<div>
    @if(session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="updateProduct">
        <div class="mb-4">
            <label for="name" class="block text-gray-600 font-bold">Product Name:</label>
            <input wire:model="name" type="text" id="name" name="name" class="form-input">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-600 font-bold">Description:</label>
            <textarea wire:model="description" id="description" name="description" class="form-input"></textarea>
            @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-600 font-bold">Price:</label>
            <input wire:model="price" type="text" id="price" name="price" class="form-input">
            @error('price') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="images" class="block text-gray-600 font-bold">Images:</label>
            <input wire:model="images" type="file" id="images" name="images[]" multiple class="form-input">
            @error('images.*') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-6">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Update Product</button>
        </div>
    </form>
</div>