<?php

// Bao gồm các tệp cần thiết
include('MyClass.php');
include('MyAbstract.php');
include('MyInterface.php');

// Giả sử Abstract1 đã được định nghĩa trong MyAbstract.php
abstract class Abstract1 {
    abstract function func_from_Ab1_no_body(); // Phương thức trừu tượng
}

// Định nghĩa các giao diện
interface Interface1 {
    public function func_from_Int1();
}

interface Interface2 {
    public function func_from_Int2();
}

// Lớp trừu tượng Ex04_Abstract kế thừa từ Abstract1 và thực hiện các giao diện
abstract class Ex04_Abstract extends Abstract1 implements Interface1, Interface2 {   
    function func_from_Ab1_no_body() {
        echo 'Overriding Abstract 01 no body from Abs Ex04 <br/>';
    }
 
    public function func_from_Int1() {
        echo 'Overriding Interface 01 from Abs Ex04 <br/>';
    }

    public function func_from_Int2() {
        echo 'Overriding Interface 02 from Abs Ex04 <br/>';
    }

    public function func_from_Ex04() {
        echo 'Abstract Ex04 <br/>';
    }
}

// Lớp Ex04 kế thừa từ lớp trừu tượng Ex04_Abstract
class Ex04 extends Ex04_Abstract {
    // Nếu cần, có thể ghi đè thêm các phương thức ở đây
}

// Tạo một đối tượng của lớp Ex04
$ex = new Ex04();
$ex->func_from_Ab1_no_body(); // Gọi phương thức từ lớp trừu tượng
$ex->func_from_Ex04(); // Gọi phương thức cụ thể
$ex->func_from_Int1(); // Gọi phương thức từ giao diện
$ex->func_from_Int2(); // Gọi phương thức từ giao diện
?>
