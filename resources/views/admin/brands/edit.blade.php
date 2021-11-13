<x-admin-layout>
@section('title')
    Edit Brand
@endsection
<x-slot name="header">
    <!-- Header -->
    <div class="relative bg-indigo-600 md:pt-32 pb-32 pt-12">
          <div class="px-4 md:px-10 mx-auto w-full">
            <div>
              <!-- Card stats -->
              <div class="flex flex-wrap">
                <p class="text-white text-xl font-bold uppercase px-3 py-1 mr-1 mb-1">Edit Brand</p>
              </div>
            </div>
          </div>
        </div>
</x-slot>
<div class="flex flex-wrap mt-4">
    <div class="w-full">
        @livewire('admin.brand-update', ['brand' => $brand])
    </div>
</div>


</x-admin-layout>