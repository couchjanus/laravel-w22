<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;


class ProductsTable extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'id';
    public $sortAsc = true;
    public $selected = [];
    public $perPage = 10;

    public function deleteProducts(){
        Product::destroy($this->selected);
    }

    public function render()
    {
        return view('livewire.admin.products-table', 
        [
            'products'=>Product::search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc':'desc')
            ->with('brand')
            ->paginate($this->perPage)
        ]);
    }
}
