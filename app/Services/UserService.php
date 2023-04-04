<?php

namespace App\Services;


use Illuminate\Database\Eloquent\Collection;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class UserService

{
    public function exportExcel(Collection $users)
    {
        $spreadsheet = new Spreadsheet();
        $activeWorksheet = $spreadsheet->getActiveSheet();
        $this->prepareExcelData($activeWorksheet, $users);
        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename=users.xlsx');
        $writer->save('php://output');
        exit;
    }

    private function prepareExcelData(Worksheet $activeWorksheet, Collection $users)
    {
        $columns = ['ID', 'Name', 'Email', 'Password'];
        for ($i = 0; $i < count($columns); $i++) {
            $activeWorksheet->setCellValue(chr(65 + $i) . '1', $columns[$i]);
        }

        foreach ($users as $key => $user) {
            $index = $key + 2;
            $activeWorksheet->setCellValue('A' . $index, $user->id);
            $activeWorksheet->setCellValue('B' . $index, $user->name);
            $activeWorksheet->setCellValue('C' . $index, $user->email);
            $activeWorksheet->setCellValue('D' . $index, $user->password);
        }
    }

    public function exportCsv(Collection $users)
    {
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename=users.csv');

        $f = fopen('php://output', 'w');
        fputcsv($f, ['ID', 'Name', 'Email', 'Password'], ';');

        foreach ($users as $user) {
            $data = [
                $user->id,
                $user->name,
                $user->email,
                $user->password,

            ];
            fputcsv($f, $data, ';');
        }
        exit;
    }
}
