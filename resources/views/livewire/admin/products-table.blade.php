<div>
    {{-- The Master doesn't talk, he acts. --}}

    <div class="w-full flex pb-10">
        <div class="w-3/6 mx-1">
            <input wire:model="search" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4" placeholder="Search Brand..." >
        </div>
        <div class="w-1/6 mx-1 relative">
            <select class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 pr-8" wire:model="sortField">
                <option value="id">Id</option>
                <option value="name">Name</option>
                <option value="price">Price</option>
                <option value="created_at">Date</option>
            </select>
        </div>

        <div class="w-1/6 mx-1 relative">
            <select class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 pr-8" wire:model="sortAsc">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
                
            </select>

        </div>
        <div class="w-1/6 mx-1 relative">

            <button class="block w-full bg-red-200 border border-gray-200 text-white py-3 px-4 rounded" wire:click="deleteProducts">Delete</button>
        </div>




    </div>

    @if(!empty($products))
        <table class="table-auto w-full mb-6">
            <trL>
                <th class="px-4 py-2"></th>
                <th class="px-4 py-2">Id</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Brand</th>
                <th class="px-4 py-2">Category</th>
                <th class="px-4 py-2">status</th>
                <th class="px-4 py-2">Created</th>
                <th class="px-4 py-2">Action</th>
            </trL>
            @foreach($products as $product)
                <tr>
                    <td class="border px-4 py-2">
                        <input type="checkbox" value="{{$product->id}}">
                    </td>
                    <td class="border px-4 py-2">{{$product->id}}</td>
                    <td class="border px-4 py-2">{{$product->name}}</td>
                    <td class="border px-4 py-2">{{$product->price}}</td>
                    <td class="border px-4 py-2">{{$product->brand->name}}</td>
                    <td class="border px-4 py-2">{{$product->category_id}}</td>
                    <td class="border px-4 py-2">{{$product->status}}</td>
                    <td class="border px-4 py-2">{{$product->created_at}}</td>
                    <td class="border px-4 py-2">
                        <button type="submit" class="text-white bg-purple-600 hover:bg-purple-900 px-2">View</button>
                        <button type="submit" class="text-white bg-yellow-600 hover:bg-yellow-900 px-2">Edit</button>
                        <button type="submit" class="text-white bg-red-600 hover:bg-red-900 px-2">Delete</button>
                    </td>
                </tr>
                @endforeach
        </table>

        {{$products->links()}}

        @else 
         <h3 class="text-center">Whoops... No products were found!</h3>
        @endif

</div>
