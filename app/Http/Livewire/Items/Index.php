<?php

namespace App\Http\Livewire\Items;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;
use Livewire\WithFileUploads;
use PDF;

class Index extends Component
{
    use LivewireWithPagination;

    public $item_id;
    public $name;
    public $price;

    public $orderBy = 'name';
    public $orderAsc = true;
    public $search = '';


    public function select($id)
    {
        $item = Item::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $cart[$id]['price'] = $cart[$id]['price'] * $cart[$id]['quantity'];
        } else {
            $cart[$id] = [
                "name" => $item->name,
                "SinglePrice" => $item->price,
                "price" => $item->price,
                "quantity" => 1,
            ];
        }
        session()->put('cart', $cart);
        session()->flash('Cartmessage', 'Item Added Successfully');
    }

    public function incress($id)
    {
        $MainPrice = Item::where('item_id', $id)->first('price');
        $cart = session()->get('cart', []);
        $cart[$id]['quantity']++;
        $cart[$id]['price'] = $cart[$id]['price'] + $MainPrice->price;
        session()->put('cart', $cart);
    }

    public function decress($id)
    {
        $MainPrice = Item::where('item_id', $id)->first('price');
        $cart = session()->get('cart', []);
        if ($cart[$id]['quantity'] != 1) {
            $cart[$id]['quantity']--;
            $cart[$id]['price'] = $cart[$id]['price'] - $MainPrice->price;
            session()->put('cart', $cart);
        }
    }

    public function save()
    {
        return redirect('/admin/Report2');
    }

    public function Unselect($id)
    {
        if ($id) {
            $cart = session()->get('cart');
            if (isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            session()->flash('Cartmessage2', 'Item removed successfully');
        }
    }

    public function export()
    {
        // $cart = session()->get('cart', []);
        // view()->share('Status', $cart);
        // $pdf = PDF::loadView('pdf', $cart);

        // // download PDF file with download method
        // return $pdf->download('pdf_file.pdf');

    }
    public function edit($id)
    {
        $item = Item::where('item_id', $id)->first();
        if ($item) {
            $this->item_id = $item->item_id;
            $this->name = $item->name;
            $this->price = $item->price;
        } else {
            return session()->flash('WrongItem', 'You Can Not Edit This Item');
        }
    }
    public function clear()
    {
        $this->item_id = null;
        $this->name = null;
        $this->price = null;
    }
    public function addSearchName()
    {
                $this->name=$this->search;
    }
    public function Create()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:72'],
            'price' => ['required', 'integer'],
        ]);
        Item::Create([
            'name' => $this->name,
            'price' => $this->price,
        ]);
        session()->flash('message', 'Item Created Successfully');
    }
    public function update()
    {
        $this->validate([
            'name' => ['string', 'max:48'],
            'price' => ['integer'],
        ]);
        // $editedPhoto =$this->pic->store('upload','public');
        $item = Item::find($this->item_id);
        if ($item) {
            $item->update([
                'name' => $this->name,
                'price' => $this->price,
                // 'email' => $this->email,
            ]);
            session()->flash('message', 'Item Updated Successfully');
        } else {
            session()->flash('message', 'You Can Not Edit This Item');
        }
        $this->emit('itemUpdated');
    }

    public function delete()
    {
        Item::where('item_id', $this->item_id)->delete();
        session()->flash('message', 'Item Deleted Successfully');
    }

    public function render()
    {
        return view(
            'livewire.items.index',
            [
                'items' => Item::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
