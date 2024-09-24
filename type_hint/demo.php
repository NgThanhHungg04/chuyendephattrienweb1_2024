<?php
declare(strict_types=1);

require_once 'I.php';
require_once 'C.php';
require_once 'A.php';
require_once 'B.php';

class Demo {
    public function runDemo(A $a, B $b) {
        $a->a1();
        echo "\n";
        $b->b1();
    }
}

// Tạo đối tượng demo từ lớp Demo
$demo = new Demo();
$a = new A();
$b = new B();

$demo->runDemo($a, $b);

?>

