<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Brand;

class BrandUpdate extends Component
{
    public Brand $brand;

    public function update()
    {
        $this->brand->save();
        session()->flash('message', 'Brand successfully updated');
    }
    public function render()
    {
        // dd($this->brand);
        return view('livewire.admin.brand-update', ['brand' => $this->brand]);
    }
}
