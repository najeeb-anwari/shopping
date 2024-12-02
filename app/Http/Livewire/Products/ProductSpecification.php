<?php

namespace App\Http\Livewire\Products;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Specification;

class ProductSpecification extends Component
{
    use AuthorizesRequests;
    protected $listeners = [
        'updateSelf' => '$refresh',
    ];
    protected $rules = [
        'specification.brand' => 'required',
        'specification.model' => 'required',
        'specification.type' => 'required',
        'specification.product_id' => 'required',
    ];
    
    public Specification $specification;

    public function render()
    {
        return view('livewire.products.product-specification');
    }

    public function mount($product_id)
    {
        $this->specification = new Specification();
        $this->specification->product_id = $product_id;
    }
    public function addSpecification()
    {
        $this->authorize('seller_access');
        $this->validate();
        $this->specification->save();
        $this->emitSelf('updateSelf');
    }
}
