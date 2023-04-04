<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ProductService

{
    public function getProducts(array $params)
    {
        $products = Product::query();

        $products = match ($params['sort'] ?? null) {
            'rating' => $products->withAvg('reviews', 'star_count')->groupBy('id')->orderByDesc('reviews_avg_star_count'),
            'price-asc' => $products->orderBy('price'),
            'price-desc' => $products->orderByDesc('price'),
            default => $products->orderByDesc('created_at')
        };

        if (isset($params['price-min'])) {
            $products->where('price', '>', $params['price-min']);
        }

        if (isset($params['price-max'])) {
            $products->where('price', '<', $params['price-max']);
        }

        return $products->where('is_active', 1)->paginate(12);
    }

    public function exportExcel(Collection $products)
    {
        $spreadsheet = new Spreadsheet();
        $activeWorksheet = $spreadsheet->getActiveSheet();
        $this->prepareExcelData($activeWorksheet, $products);
        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename=products.xlsx');
        $writer->save('php://output');
        exit;

    }

    private function prepareExcelData(Worksheet $activeWorksheet, Collection $products)
    {
        $columns = ['ID', 'Name', 'Short description', 'Description', 'Price', 'Sale price', 'Status', 'Category name', 'Created at', 'Image'];
        for ($i = 0; $i < count($columns); $i++) {
            $activeWorksheet->setCellValue(chr(65 + $i) . '1', $columns[$i]);
        }

        foreach ($products as $key => $product) {
            $index = $key + 2;
            $activeWorksheet->setCellValue('A' . $index, $product->id);
            $activeWorksheet->setCellValue('B' . $index, $product->name);
            $activeWorksheet->setCellValue('C' . $index, $product->short_description);
            $activeWorksheet->setCellValue('D' . $index, $product->description);
            $activeWorksheet->setCellValue('E' . $index, $product->price);
            $activeWorksheet->setCellValue('F' . $index, $product->sale_price);
            $activeWorksheet->setCellValue('G' . $index, $product->is_active ? 'Активен' : 'Не активен');
            $activeWorksheet->setCellValue('H' . $index, $product->category?->name);
            $activeWorksheet->setCellValue('I' . $index, $product->created_at);
            $activeWorksheet->setCellValue('J' . $index, $product->image);
        }
    }

    public function exportCsv(Collection $products)
    {
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename=products.csv');

        $f = fopen('php://output', 'w');
        fputcsv($f, ['ID', 'Name', 'Short description', 'Description', 'Price', 'Sale price', 'Status', 'Category name', 'Created at', 'Image'], ';');

        foreach ($products as $product) {
            $data = [
                $product->id,
                $product->name,
                $product->short_description,
                $product->description,
                $product->price,
                $product->sale_price,
                $product->is_active == 1 ? 'Активен' : 'Не активен',
                $product->category?->name,
                $product->created_at,
                $product->image

            ];
            fputcsv($f, $data, ';');
        }
        exit;
    }

    public function importExcel()
    {
        $reader = IOFactory::createReader('Xlsx');
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load("products.xlsx");
        $workSheet = $spreadsheet->getActiveSheet();
        $lastColumn = $workSheet->getHighestColumn();
        /** @var Row $row */
        foreach ($workSheet->getRowIterator() as $rowIndex => $row) {
            if ($rowIndex != 1) {
                $array = $workSheet->rangeToArray('A' . $rowIndex . ':' . $lastColumn . $rowIndex);
                $this->processingProductFromExcel($array[0]);
            }
        }
    }

    private function processingProductFromExcel(array $productData)
    {
        $product = Product::query()->find($productData[0]);

        if (!$product) {
            $category = Category::query()->where('name', $productData[7])->first();
            if (!$category && $productData[6]) {
                $category = Category::query()->create([
                    'name' => $productData[7],
                ]);
            }

            return Product::query()->create([
                'name' => $productData[1],
                'short_description' => $productData[2],
                'description' => $productData[3],
                'price' => $productData[4],
                'sale_price' => $productData[5],
                'is_active' => $productData[6],
                'category_id' => $category ? $category->id : null
            ]);
        }

        return $product;
    }
}
