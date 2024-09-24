<?php 

declare(strict_types=1);
include 'I.php';
include 'B.php';
include 'C.php';
include 'A.php';

 class Demo {
    //A
    public function typeReturnA(): ?A
    {
        echo __FUNCTION__ . "<br>";
        return new A;
    }
    public function typeReturnB(): ?A
    {
        echo __FUNCTION__ . "<br>";
        return new B;
    }
    public function typeReturnC(): ?A
    {
        echo __FUNCTION__ . "<br>";
        return new C;
    }
    public function typeReturnI(): ?A
    {
        echo __FUNCTION__ . "<br>";
        return new I;
    }
    public function typeReturnNull(): ?A
    {
        echo __FUNCTION__ . "<br>";
        return new Null;
    }

//B

    public function typeReturnA(): ?B
    {
        echo __FUNCTION__ . "<br>";
        return new A;
    }

   public function typeReturnB(): ?B
    {
        echo __FUNCTION__ . "<br>";
        return new B;
    }
    public function typeReturnC(): ?B
    {
        echo __FUNCTION__ . "<br>";
        return new C;
    }
    public function typeReturnI():B
    {
        echo __FUNCTION__ . "<br>";
        return new I;
    }
    public function typeReturnNull():B
    {
        echo __FUNCTION__ . "<br>";
        return new Null;
    }
    
    public function typeReturnA(): ?C
    {
        echo __FUNCTION__ . "<br>";
        return new A;
    }
    public function typeReturnB(): ?C
    {
        echo __FUNCTION__ . "<br>";
        return new B;
    }
    public function typeReturnC(): ?C
    {
        echo __FUNCTION__ . "<br>";
        return new C;
    }
    public function typeReturnI(): ?C
    {
        echo __FUNCTION__ . "<br>";
        return new I;
    }  
    public function typeReturnNull(): ?C
    {
        echo __FUNCTION__ . "<br>";
        return new Null;
    }

    //I

     public function typeReturnA(): ?I
    {
        echo __FUNCTION__ . "<br>";
        return new A;
    }
    public function typeReturnB(): ?I
    {
        echo __FUNCTION__ . "<br>";
        return new B;
    }
    public function typeReturnC(): ?I
    {
        echo __FUNCTION__ . "<br>";
        return new C;
    }
    public function typeReturnI(): ?I
    {
        echo __FUNCTION__ . "<br>";
        return new I;
    }
    public function typeReturnNull(): ?I
    {
        echo __FUNCTION__ . "<br>";
        return new Null;
    }
   //null
   public function typeReturnNull(): ?A
   {
       echo __FUNCTION__ . "<br>";
       return new A;
   }
   public function typeReturnNull(): ?B
   {
       echo __FUNCTION__ . "<br>";
       return new B;
   }
   public function typeReturnNull(): ?C
   {
       echo __FUNCTION__ . "<br>";
       return new C;
   }
  public function typeReturnI(): ?I
    {
        echo __FUNCTION__ . "<br>";
        return new I;
    }
    public function typeReturnNull(): ?Null
    {
        echo __FUNCTION__ . "<br>";
        return new Null;
    }
 }
 $demo =new Demo();

// $demo->typeReturnA();
// $demo->typeReturnB();
// $demo->typeReturnC();
// $demo->typeReturnI();
$demo->typeReturnNUll();
 
?>