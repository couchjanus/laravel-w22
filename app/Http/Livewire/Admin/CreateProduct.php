<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\{Brand, Category, Product, Picture};

class CreateProduct extends Component
{
    use WithFileUploads;

    public $category_id;
    public $brand_id;
    public $status;
    public $description;
    public $name;
    public $price;
    public $pictures = [];

    public function save()
    {
        $product = new Product();
        $product->name = $this->name;
        $product->price = $this->price;
        $product->description = $this->description;
        $product->brand_id = $this->brand_id;
        $product->category_id = $this->category_id;
        $product->status = $this->status ? 1 : 0;
        $product->save();

        foreach($this->pictures as $picture){
            $cover_path = $picture->store('products', 'public');
            $cover = Picture::create(['cover_path' => $cover_path]);
            $product->pictures()->attach($cover);
        }

        return redirect()->route('admin.products.index');
    }

    public function render()
    {
        return view('livewire.admin.create-product', [
            'categories' => Category::pluck('name', 'id'), 
            'brands' => Brand::pluck('name', 'id'), 
        ]);
    }
}
