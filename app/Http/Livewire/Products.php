<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
 
    public $products, $id_product, $name, $amount;
    public $modal = FALSE;


    public function render()
    {        
        $this->products = Product::all();
        return view('livewire.products');
    }
    public function visible()
    {
        $this->modal = !$this->modal;
    }
    public function clean() {
        $this->name = "";
        $this->amount = "";
    }
    public function delete($id) 
    {
        Product::find($id)->delete();
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $this->id_product = $product->id;
        $this->name = $product->name;
        $this->amount = $product->amount;
        $this->visible();
    }

    public function crear() 
    {
        Product::updateOrCreate(
            ['id' => $this->id_product],
            [
                'name' => $this->name,
                'amount' => $this->amount,
            ]);
        session()->flash('message',  $this->id_product ? 'Actualizacion exitosa':'Alta exitosa');
        $this->visible();
        $this->clean();
    }
}