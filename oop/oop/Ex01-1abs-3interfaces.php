<?php

// MyAbstract.php
abstract class MyAbstract {
    abstract protected function func_from_Ab1_no_body();
}

// MyInterface.php
interface MyInterface1 {
    public function func_from_Int1();
}

interface MyInterface2 {
    public function func_from_Int2();
}

interface MyInterface3 {
    public function func_from_Int3();
}

// Ex01.php
include('MyClass.php');
include('MyAbstract.php');
include('MyInterface.php');

// Single Abstract, Many Interfaces
class Ex01 extends MyAbstract implements MyInterface1, MyInterface2, MyInterface3 {   
    // Implementing the abstract method from MyAbstract
    protected function func_from_Ab1_no_body() {
        echo 'Abstract 01 no body from Ex01';
    }
 
    // Implementing methods from interfaces
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

// Instantiate Ex01 and call methods
$ex = new Ex01();
$ex->func_from_Int1(); // Output: Function from Interface 1
$ex->func_from_Int2(); // Output: Function from Interface 2
$ex->func_from_Int3(); // Output: Function from Interface 3
$ex->func_from_Ab1_no_body(); // Output: Abstract 01 no body from Ex01
