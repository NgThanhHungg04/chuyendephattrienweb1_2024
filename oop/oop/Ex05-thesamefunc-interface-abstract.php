<?php

// Bao gồm các tệp cần thiết
include('MyClass.php');
include('MyAbstract.php');
include('MyInterface.php');

// Giả sử Abstract1 đã được định nghĩa trong MyAbstract.php
abstract class Abstract1 {
    abstract function func_from_Ab1_no_body(); // Phương thức trừu tượng
}

// Định nghĩa giao diện
interface Interface1 {
    public function func_from_Int1();
}

// Lớp Ex05 kế thừa từ Abstract1 và thực hiện giao diện Interface1
class Ex05 extends Abstract1 implements Interface1 {   
    public function func_from_Ab1_no_body() {
        echo 'Implementing abstract method from Abstract1 <br/>';
    }

    public function func_from_Int1() {
        echo 'Implementing Interface1 method <br/>';
    }

    public function theSame() {
        echo 'Method theSame called <br/>';
    }
}

// Tạo một đối tượng của lớp Ex05
$ex = new Ex05();
$ex->theSame(); // Gọi phương thức theSame
$ex->func_from_Ab1_no_body(); // Gọi phương thức trừu tượng đã được cài đặt
$ex->func_from_Int1(); // Gọi phương thức từ giao diện
?>
