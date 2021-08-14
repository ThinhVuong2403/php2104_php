<?php 

    // class SimpleClass 
    // {
    //     private $tuoi = 24;
    //     private $val = 'a default value';
    //     private $name = 'thinh';


    //     public function __construct () {

    //     }

    //     public function setName ( $name ) {
    //         $this->name = $name;
    //     }

    //     public function setAge ( $tuoi ) {
    //         $this->tuoi = $tuoi;
    //     }

    //     public function getName () {
    //         return $this->name;
    //     }

    //     public function getAge () {
    //         return $this->tuoi;
    //     }

    //     public function display () {
    //         return $this->val. ' ' . $this->name . ' ' . $this->tuoi;
    //         // return $val . ' ' . $name . ' ' . $tuoi;
    //     }
    // }

    // $class = new SimpleClass();
    // echo $class->display();
    // echo '<br>';
    // $class->setName('tuan');
    // echo $class->getName();
    // echo '<br>';
    // echo $class->display();


    class Number 
    {
        private $number;

        public function __construct()
        {
            
        }

        public function show($number) 
        {
            $this->number = $number;
            echo 'Hi' . ' ' . $this->number;
        }
    }

    class IntegerNumber extends Number 
    {
        public function show($number)
        {
            $this->number = $number;
            echo 'Hello' . ' ' . $this->number;
        }
    }

    class FloatNumber extends Number
    {
        public function show($number)
        {
            $this->number = $number;
            echo 'Konichiwa' . ' ' . $this->number;
        }
    }

    $num1 = new Number();
    $num1->show(2);
    echo '<br>';
    $num2 = new IntegerNumber();
    $num2->show(10);
    echo '<br>';
    $num3 = new FloatNumber();
    $num3->show(4);
?>
