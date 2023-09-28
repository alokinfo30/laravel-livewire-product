<div>
    @if(session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="create">
        <div class="mb-4">
            <label for="name" class="block text-gray-600 font-bold">Product testName:</label>
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
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Create Product</button>
        </div>
    </form>
</div>

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

<!-- <livewire: Product /> -->
<div>
    @if(session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-6">
        <h2 class="text-2xl font-bold">Product List</h2>
    </div>

    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Name
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Description
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Price
                </th>
                <th class="px-6 py-3 bg-gray-50"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                        {{ $product->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                        {{ $product->description }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                        ${{ number_format($product->price, 2) }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                        <a href="{{ route('products.edit', $product->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        <form class="inline-block" wire:submit.prevent="deleteProduct({{ $product->id }})">
                            <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>