<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use App\Services\ProductService;
use Illuminate\Http\Request;


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class ProductController extends Controller
{
    private ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
        parent::__construct();
    }

    public function index()
    {
        $products = Product::query()->orderByDesc('created_at')->paginate(10);

        return view('admin.products.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('admin.products.create', [
            'tags' => Tag::query()->where('is_active', 1)->get(),
            'categories' => Category::query()->where('is_active', 1)->get()
        ]);

    }

    public function store(CreateProductRequest $request)
    {
        Product::query()->create($request->validated());
        session()->flash('success', 'Product has been successfully created');

        return redirect()->route('admin.products.index');
    }

    public function edit(Product $product)
    {
        return view('admin.products.update', [

            'product' => $product,
            'categories' => Category::query()->where('is_active', 1)->get()

        ]);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        session()->flash('success', 'Product has been successfully updated');

        return redirect()->route('admin.products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        session()->flash('success', 'Product has been successfully deleted.');
        return back();
    }

    public function exportExcel(ProductService $productService)
    {
        $productService->exportExcel(Product::all());
    }

    public function exportCsv()
    {
        $this->productService->exportCsv(Product::all());
    }

    public function importExcel()
    {
        $this->productService->importExcel(Product::all());
    }


}
