<div>
    <div class="w-full flex pb-10">
        <div class="w-3/6 mx-1 relative">
            
        </div>
        <div class="w-1/6 mx-1 relative">
            <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4" placeholder="Search brands...">    
        </div>

        <div class="w-1/6 mx-1 relative">
        <a href="{{route('admin.brands.index')}}"><button class="block w-full bg-green-500 border border-gray-200 text-white py-3 px-4 pr-8 rounded">
                All Brands
            </button></a>
        </div>

        <div class="w-1/6 mx-1 relative">
            <button class="block w-full bg-red-500 border border-gray-200 text-white py-3 px-4 pr-8 rounded">
                Delete Brand
            </button>
        </div>
    
    </div>

    <form wire:submit.prevent="update">
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        
            Name: <input value="{{$brand->name}}" type="text">
            
            <button>Update</button>

    </form>
</div>