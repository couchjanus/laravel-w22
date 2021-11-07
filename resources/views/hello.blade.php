<x-app-component>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<x-slot name="header">
    <h2 class="text-xl text-gray-800 leading-tight font-semibold">
        Home Page
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-6 bg-white border-b border-gray-200">
        Hello There!
        </div>
    </div>
    <div x-data="instance()"
    x-init="fetch('http://127.0.0.1:8000/api/products')
    .then(response => response.json())
    .then(data => {products = data;
    console.log(products)})">
    <div>
        <template x-for="product in products" :key="product.id">
            <div x-text="product.name"></div>
        </template>
    </div>
</div>

<script>
    function instance(){
        return {
            products: []
        };
    }
</script>
</x-app-component>