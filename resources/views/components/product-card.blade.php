<div class="w-1/3 md:w-1/3 xl:w-1/4 p-6 flex flex-col">
    <form action="{{ route('product.add.to.cart') }}" method="POST" role="form" class="inline-block">
    @csrf
    <input type="hidden" name="productId" value="{{ $product->id }}">

    <input type="hidden" name="price" value="{{ $product->price }}">
    <a href="#">
        <img class="hover:grow hover:shadow-lg object-cover object-center" width="240" src="/storage/{{ $product->pictures[0]->cover_path ?? null }}">
        <div class="pt-3 flex items-center justify-between">
            <p class="">{{ $product->name }}</p>
            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black">
                <use xlink:href="#wish"/></svg>
        </div>
        <div class="flex justify-between flex-wrap ">

            <span class="pt-1 text-gray-900 inline-flex">
                {!! config('shopping_cart.currency_symbol') !!}{{ $product->price }}
            </span>

            <button type="submit" class="inline-flex flex-shrink-0 xl:mt-0 lg:mt-3 text-gray-900 bg-white border-0 py-1 px-2 hover:bg-gray-700 hover:text-white rtounded">Add To Cart</button>

        </div>

    </a>
    </form>
</div>