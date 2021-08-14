<?php

// class ParentClass
// {
//     protected $attribute1;
//     private $attribute2;
//     protected $attribute3;

//     public function __construct()
//     {
//         $this->attribute1 = 'attribute1';
//         $this->attribute2 = 'attribute2';
//         $this->attribute3 = 'attribute3';
//     }

//     public function action1()
//     {
//         return 'action1' . $this->attribute1 .  '<br>';
//     }

//     public function action2($var = 'Var')
//     {
//         return '<br>' . $var;
//     }
// }

// class ChildClass1 extends ParentClass
// {

//     public function __construct()
//     {
//         parent::__construct();
//         $this->attribute2 = 'ac';
//     }

//     public function test1()
//     {
//         return $this->attribute1;
//     }
//     public function test2()
//     {
//         return $this->attribute2;
//     }
// }

// class ChildClass2 extends ParentClass
// {
//     public function __construct()
//     {
//         parent::__construct();
//     }

//     public function action3()
//     {

//     }

//     public function action1($var = 'ABC')
//     {
//         return '<br>' . $var . '- overriding';
//     }
// }

// $sub1 = new ChildClass1();

// echo $sub1->test1() . '<br>';
// echo $sub1->test2();
// $ac = $sub1->attribute1;
// echo "$ac";

// interface Name
// {

//     public function getName();

// }

// interface MyInterface
// {
    
//     public function doThis();

// }

// class PeopleName implements Name, MyInterface
// {   
    
//     private $name = 'thinh';
//     private $action = 'love';

//     public function getName()
//     {

//         return $this->name;

//     }

//     public function doThis()
//     {
//         return $this->action;
//     }

// }

// $nguoi = new PeopleName();

// echo $nguoi->getName() . '<br>' . $nguoi->doThis();

// abstract class AbstractClass
// {

//     abstract protected function getName();
//     abstract protected function doThis();
    
//     public function printOut()
//     {
//         print $this->getName();
//     }

// }

// class Name extends AbstractClass
// {

//     protected function getName()
//     {
        
//         return 'Thinh';
        
//     }

//     public function doThis()
//     {
        
//         echo 'love';

//     }

// }

// $class1 = new Name();
// $class1->printOut();
// $class1->doThis();

echo phpinfo();
?>
