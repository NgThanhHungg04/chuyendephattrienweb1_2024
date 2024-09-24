<?php
declare(strict_types=1);
require_once 'vendor/autoload.php'; // Đảm bảo bạn đã cài đặt PHPExcel



class Demo {
    public function runDemo($X, $Y) {
        if ($X instanceof A) {
            return $Y instanceof A ? $Y->a1() : 'False';
        } elseif ($X instanceof B) {
            return $Y instanceof B ? $Y->b1() : 'False';
        } elseif ($X instanceof C || $X === null) {
            return 'Null'; // Trả về Null nếu X là C hoặc Null
        } else {
            return 'False'; // Trường hợp không hợp lệ
        }
    }
}

// Tạo đối tượng demo
$demo = new Demo();

// Tạo bảng kết quả
$results = [];
$cases = ['A', 'B', 'C', 'I', 'Null'];
foreach ($cases as $X) {
    foreach ($cases as $Y) {
        // Tạo các đối tượng dựa trên trường hợp
        $objX = $X === 'A' ? new A() : ($X === 'B' ? new B() : ($X === 'C' ? new C() : null));
        $objY = $Y === 'A' ? new A() : ($Y === 'B' ? new B() : ($Y === 'C' ? new C() : null));
        
        // Chạy phương thức và kiểm tra kết quả
        $result = $demo->runDemo($objX, $objY);
        $isTrue = $result !== 'False' ? 'True' : 'False';

        // Thêm vào bảng kết quả
        $results[] = [$X, $Y, $result, $isTrue];
    }
}

// Tạo file Excel
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle('Evaluation Results');
$sheet->setCellValue('A1', 'X');
$sheet->setCellValue('B1', 'Y');
$sheet->setCellValue('C1', 'Return Value');
$sheet->setCellValue('D1', 'Result');

$row = 2;
foreach ($results as $result) {
    $sheet->setCellValue('A' . $row, $result[0]);
    $sheet->setCellValue('B' . $row, $result[1]);
    $sheet->setCellValue('C' . $row, $result[2]);
    $sheet->setCellValue('D' . $row, $result[3]);
    $row++;
}

// Lưu file Excel
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
$writer->save('cau_3.xlsx');

echo "File cau_3.xlsx đã được tạo thành công!";
?>
