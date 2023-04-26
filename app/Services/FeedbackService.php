<?php

namespace App\Services;


use Illuminate\Database\Eloquent\Collection;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class FeedbackService

{
    public function exportExcel(Collection $feedbacks)
    {
        $spreadsheet = new Spreadsheet();
        $activeWorksheet = $spreadsheet->getActiveSheet();
        $this->prepareExcelData($activeWorksheet, $feedbacks);
        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename=feedbacks.xlsx');
        $writer->save('php://output');
        exit;

    }
       private function prepareExcelData(Worksheet $activeWorksheet, Collection $feedbacks)
    {
        $columns = ['ID', 'Name', 'Subject', 'Message', 'Email', 'Created at', 'File name'];
        for ($i = 0; $i < count($columns); $i++) {
            $activeWorksheet->setCellValue(chr(65 + $i) . '1', $columns[$i]);
        }

        foreach ($feedbacks as $key => $feedback) {
            $index = $key + 2;
            $activeWorksheet->setCellValue('A' . $index, $feedback->id);
            $activeWorksheet->setCellValue('B' . $index, $feedback->name);
            $activeWorksheet->setCellValue('C' . $index, $feedback->subject);
            $activeWorksheet->setCellValue('D' . $index, $feedback->message);
            $activeWorksheet->setCellValue('E' . $index, $feedback->email);
            $activeWorksheet->setCellValue('F' . $index, $feedback->created_at);
            $activeWorksheet->setCellValue('G' . $index, $feedback->file_name);

        }
    }

    public function exportCsv(Collection $feedbacks)
    {
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename=feedbacks.csv');

        $f = fopen('php://output', 'w');
        fputcsv($f,  ['ID', 'Name', 'Subject', 'Message', 'Email', 'Created at', 'File name'], ';');

        foreach ($feedbacks as $feedback) {
            $data = [
                $feedback->id,
                $feedback->name,
                $feedback->subject,
                $feedback->message,
                $feedback->email,
                $feedback->created_at,
                $feedback->file_name,
                $feedback->file_size,
            ];
            fputcsv($f, $data, ';');
        }
        exit;
    }
}
