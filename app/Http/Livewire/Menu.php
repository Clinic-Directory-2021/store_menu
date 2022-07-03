<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\items as items;

class Menu extends Component
{   public $items;
    public $a;
    public $b;
    public $c;
    public $add = 'none';
    public $edit = 'none';

    public $name;
    public $price;
    public $category;

    public $ID;
    public $edit_name;
    public $edit_price;
    public $edit_category;

    public function openAdd(){
        $this->add = 'block';
    }
    public function closeAdd(){
        $this->add = 'none';
        $this->name = null;
        $this->price = null;
        $this->category = null;
    }
    public function closeEdit(){
        $this->edit = 'none';
        $this->edit_name = null;
        $this->edit_price = null;
        $this->edit_category = null;
    }
    public function add(){
        $item = new items;
        $item->name=$this->name;
        $item->price=$this->price;
        $item->category=$this->category;  
        $item->owner=session('username');
        $item->save();

        $this->name = null;
        $this->price = null;
        $this->category = null;
        $this->items = items::all();
        $this->add = 'none';
    }
    public function edit($ID){
        $this->edit = 'block';
        $data = items::findOrFail($ID);
        $this->ID = $ID;
        $this->edit_name = $data->name;
        $this->edit_price = $data->price;
        $this->edit_category = $data->category;
        
    }
    public function update(){
            $data = items::where('ID', $this->ID)->update(['name' => $this->edit_name, 'price' => $this->edit_price, 'category' => $this->edit_category]);

            $this->edit_name = null;
            $this->edit_price = null;
            $this->edit_category = null;
            $this->b = 'Success';

            $this->items = items::all();
            $this->edit = 'none';
    }

    public function destroy($id)
    {
        if ($id) {
            $record = items::where('ID', $id);
            $record->delete();
            $this->item = items::all();
        }
    }
    public function logout(){
        return redirect()->to('/');
    }
    public function render()
    {   
        $this->c = 'Welcome Back! '. session('username');
        $this->items = items::all();
        return view('livewire.menu');
    }
}
