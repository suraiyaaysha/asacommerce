<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;


class Index extends Component
{

    protected $paginationTheme = 'bootstrap';
    use WithPagination;

    public function render()
    {
        // $categories = Category::all();
        $categories = Category::orderBy('id', 'DESC')->paginate(2);
        return view('livewire.admin.category.index',['categories'=>$categories]);
    }
}
