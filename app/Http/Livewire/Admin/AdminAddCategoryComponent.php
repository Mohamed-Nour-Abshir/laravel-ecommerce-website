<?php

namespace App\Http\Livewire\Admin;

use App\Models\category;
use App\Models\subcategory;
use Livewire\Component;
use illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;

    public $category_id;
    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);
    }
    public function storeCategory(){

        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);

        if($this->category_id){
            $category = new subcategory();
            $category->name = $this->name;
            $category->slug = $this->slug;
            $category->category_id = $this->category_id;
            $category->save();
        }
        else{
            $category = new category;
            $category->name = $this->name;
            $category->slug = $this->slug;
            $category->save();
        }
        session()->flash('message', 'One Category Added Successfully');
    }
    public function render()
    {
        $categories = category::all();
        return view('livewire.admin.admin-add-category-component',['categories'=>$categories])->layout('layouts.home');
    }
}
