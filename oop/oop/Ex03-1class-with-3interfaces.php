<?php

// Bao gồm các tệp cần thiết
include('MyClass.php');
include('MyAbstract.php');
include('MyInterface.php');

// Giả sử Class1 đã được định nghĩa trong MyClass.php
class Class1 {
    public function func_from_class1() {
        echo 'Original Class 01 <br/>';
    }
    
    public function func_from_class1_noOverride() {
        echo 'Original Class 01 no Override <br/>';
    }
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

// Lớp Ex03 kế thừa từ Class1 và thực hiện các giao diện
class Ex03 extends Class1 implements Interface1, Interface2, Interface3 {   
    function func_from_class1() {
        echo 'Overriding Class 01 from Ex03 <br/>';
    }
 
    public function func_from_Int1() {
        echo 'Function from Interface 1 <br/>';
    }

    public function func_from_Int2() {
        echo 'Function from Interface 2 <br/>';
    }

    public function func_from_Int3() {
        echo 'Function from Interface 3 <br/>';
    }
}

// Tạo một đối tượng của lớp Ex03
$ex = new Ex03();
$ex->func_from_class1(); // Gọi phương thức ghi đè
$ex->func_from_class1_noOverride(); // Gọi phương thức gốc

// Gọi các phương thức từ giao diện
$ex->func_from_Int1();
$ex->func_from_Int2();
$ex->func_from_Int3();
?>
