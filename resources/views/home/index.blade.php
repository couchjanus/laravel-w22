<x-web-layout>
    @section('title')
        Home page
    @endsection

    <x-slot name="carousel">
        <x-web-carousel></x-web-carousel>
    </x-slot>

    <x-slot name="header">
        <x-web-nav-store />
    </x-slot>

    @forelse($products as $product)
        <x-product-card :product="$product" />
    @empty
        <h2>No products yet</h2>
    @endforelse
    
</x-web-layout>

