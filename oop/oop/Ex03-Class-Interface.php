<?php
define('EOL', "<br>");

abstract class AbsA {
    // Khai báo phương thức tĩnh
    static public function AFooA() {
        echo 'AFooA' . EOL;
    }
    // Khai báo phương thức không định nghĩa
    protected function BFooB() {
        echo 'BFooB' . EOL;
    }
}

// Giao diện bắt buộc phải dùng public
interface IA {
    public function IFooA();
    public function IFooAB();
}

interface IB {
    public function IFooB();
}

// Lớp Ex01 kế thừa lớp trừu tượng và thực hiện các giao diện
class Ex01 extends AbsA implements IA, IB {
    static public function SFooA() {
        echo 'Static Interface FooA' . EOL;
    }
    
    public function Declare() {
        echo 'run A' . EOL;
    }
    
    public function NotDeclare() {
        echo 'run B' . EOL;
    }
    
    public function IFooA() {
        echo 'Interface FooA' . EOL;
    }
    
    public function IFooB() {
        echo 'Interface FooB' . EOL;
    }
    
    public function IFooAB() {
        echo 'Interface FooAB' . EOL;
    }
}

// Tạo đối tượng Ex01 và gọi các phương thức
$test = new Ex01();
$test->Declare();
$test->NotDeclare();
$test->IFooA();
$test->IFooB();

// Gọi phương thức tĩnh
Ex01::SFooA();
Ex01::AFooA(); // Gọi phương thức tĩnh từ lớp trừu tượng
?>
