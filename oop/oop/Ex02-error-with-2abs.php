<?php

// Bao gồm các tệp cần thiết
include('MyClass.php');
include('MyAbstract.php');
include('MyInterface.php');

// Giả sử có một lớp trừu tượng Abstract1 đã được định nghĩa
abstract class Abstract1 {
    abstract function func_from_Ab1_no_body();
}

// Giả sử có một lớp trừu tượng Abstract2 đã được định nghĩa
abstract class Abstract2 {
    abstract function func_from_Ab2_no_body();
}

// Định nghĩa các giao diện
interface Interface1 {
    public function func_from_Int1();
}

interface Interface2 {
    public function func_from_Int2();
}

interface Interface3 {
    public function func_from_Int3();
}

// Lớp Ex02 kế thừa từ Abstract1 và thực hiện các giao diện
class Ex02 extends Abstract1 implements Interface1, Interface2, Interface3 {   
    function func_from_Ab1_no_body() {
        echo 'Abstract 01 no body from Ex02';
    }

    function func_from_Ab2_no_body() {
        echo 'Abstract 02 no body from Ex02';
    }

    public function func_from_Int1() {
        echo 'Function from Interface 1';
    }

    public function func_from_Int2() {
        echo 'Function from Interface 2';
    }

    public function func_from_Int3() {
        echo 'Function from Interface 3';
    }
}

// Tạo một đối tượng của lớp Ex02
$ex = new Ex02();
$ex->func_from_Ab1_no_body(); // Gọi phương thức từ lớp trừu tượng
$ex->func_from_Int1(); // Gọi phương thức từ giao diện
$ex->func_from_Int2(); // Gọi phương thức từ giao diện
$ex->func_from_Int3(); // Gọi phương thức từ giao diện
?>
