<!-- 
   call object as function
 -->

<?php


class calculation
{

   public $a,$b;
   
   public function __construct($a,$b)
   {
      
      $this->a = $a;
      $this->b = $b;
   }


   public function sum()
   {
      echo $this->a + $this->b;
   }

   public function __invoke()
   {
      echo $this->a + $this->b; // case 2
   } 
}


// Case 1

// $test = new calculation(20,50);
// // $test->sum();

// $test(); // error fatal


// Case 2

$test = new calculation(20,50);
// $test->sum();

$test(); // error fatal

?>