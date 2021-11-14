<x-web-layout>
    <div class="flex flex-col text-left">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    @if(\Cart::isEmpty())
                        <div class="alert alert-warning">Your shopping cart is empty</div>
                    @else
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase
                  tracking-wider">Product</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase
                  tracking-wider">Title</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase
                  tracking-wider">Quantity</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase
                  tracking-wider">Price</th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                        @foreach(\Cart::getContent() as $product)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        @foreach($product->attributes as $ley => $value)
                                            <img src="/storage/{{ $value }}" class="h-10 w-10 rounded-full">
                                        @endforeach
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ Str::words($product->name, 20) }}</div>
                                <div class="text-sm text-gray-500"></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">{{ $product->quantity }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
{!! config('shopping_cart.currency_symbol') !!}{{ $product->price }}
</td>
<td
class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
<a href="{{ route('cart.item.remove', $product->id)  }}" class="text-red-600 hover:text-red-900">&times;</a>
</td>
</tr>
@endforeach
</tbody>
</table>
@endif
<a href="{{ route('checkout.index') }}" class="bg-indigo-600 text-white py-1 px-2 border rounded flex-shrink-0 inline-flex">Checkout</a>
</div>
</div>
</div>
</div>



</x-web-layout>