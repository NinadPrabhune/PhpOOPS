<!-- 
    return 1 OR 0

    Check value of variable set or not

    It is a magic method that is invoked when isset() or empty() check non-existent or inaccessible class property:

    __isset() is triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties. 
 -->

<?php


class student
{

   public $course;
   private $first_name;
   private $last_name;

   public function setName($fname, $lname)
   {
      $this->first_name = $fname . "<br>";
      $this->last_name = $lname . "<br>";
   }

   public function __isset($property)
   {

      echo isset($this->$property) . "<br>";
   }
}

$test = new student();


//    $test->course='PHP';
//    echo isset($test->course);


//    $test->setName("Ninad", "Prabhune"); 


echo isset($test->first_name);
echo isset($test->last_name);



//     echo "<pre>";
//     print_r($test);
//     echo "</pre>";
?>