<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product; // Pastikan model Product diimpor
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Products - SkyHigh')]
class ProductsPage extends Component
{
    use WithPagination;

    #[Url]
    public $selected_categories = [];

    #[Url]
    public $selected_brands = []; 

    #[Url]
    public $sort = 'latest';

    public function render()
    {
        // Query untuk mendapatkan produk yang aktif
        $productQuery = Product::query()->where('is_active', 1);

        if (!empty($this->selected_brands)) {
            $productQuery->whereIn('brand_id', $this->selected_brands);
        }

        if ($this->sort == 'latest') {
            $productQuery->latest();
        }

        if ($this->sort == 'price') {
            $productQuery->orderBy('price');
        }
        return view('livewire.products-page', [
            'products' => $productQuery->paginate(6), // Pagination dengan 6 item per halaman
            'brands' => Brand::where('is_active', 1)->get(['id', 'name', 'slug']),
            'categories' => Category::where('is_active', 1)->get(['id', 'name', 'slug']), 
        ]);
    }
}
