<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Brand;
use Livewire\WithPagination;

class BrandTable extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 5;
    public $sortField = 'id';
    public $sortAsc = true;
    public $selected = [];

    public function deleteBrands(){
        Brand::destroy($this->selected);
    }
    
    public function render()
    {
        return view('livewire.admin.brand-table', [
            'brands' => Brand::search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc':'desc')
            ->paginate($this->perPage),
        ]);
    }

}
