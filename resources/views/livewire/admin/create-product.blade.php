
<div class="container px-5 py-24 mx-auto">
       
    <form wire:submit.prevent="save">
       
            <div class="relative flex-row flex-col w-full">
                <label for="product-name" class="leading-7 text-sm text-gray-600">Product Name</label>
                <input type="text" id="product-name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" wire:model="name">
            </div>
            <div class="relative flex-row flex-col w-full">
                <label for="product-price" class="leading-7 text-sm text-gray-600">Product Price</label>
                <input type="text" id="product-price" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" wire:model="price">
            </div>
            <div class="relative flex-row flex-col w-full">
                <label for="description" class="leading-7 text-sm text-gray-600">Description</label>
                <textarea class="appearance-none block w-full bg-blend-lighten text-gray-700 rounded py-3 px-4 mb-3" id="description" wire:model="description"></textarea>
               
            </div>

            <div class="relative flex-row flex-col w-full mb-6">
                <div class="mx-3 flex mb-3">
                    @if($pictures)
                        @foreach($pictures as $picture)
                        <img src="{{ $picture->temporaryUrl()   }}" width="120">
                        @endforeach
                    @endif
                </div>
                <input type="file" wire:model="pictures" multiple>
                @error('pictures.*') <span class="error">{{$message}}</span>
                @enderror
            </div>
            <div class="relative flex-row flex-col w-full">
                <label for="product-brand" class="leading-7 text-sm text-gray-600">Product Brand</label>
                <select class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" id="product-brand" wire:model="brand_id">
                    <option>Choose one of them...</option>
                    @foreach($brands as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
            <div class="relative flex-row flex-col w-full">
                <label for="product-category" class="leading-7 text-sm text-gray-600">Product Category</label>
                <select class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" id="product-category" wire:model="category_id">
                <option>Choose one of them...</option>
                @foreach($categories as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                @endforeach
                </select>
            </div>

            <div class="relative flex-row flex-col w-full">
                <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <input id="status" wire:model="status" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="status" class="font-medium text-gray-700">Status</label>
                    
                  </div>
                </div>
            </div>
            <div class="relative flex-row flex-col w-full">
                <button type="submit" role="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Add New Product
            </button>
            </div>
    </form>
</div>
