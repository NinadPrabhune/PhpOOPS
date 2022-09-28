<!-- 
    Cannot access (unset) private property outside class then  __unset used
 -->

<?php


class student
{

   public $course = 'PHP';
   private $first_name;
   private $last_name;

   public function setName($fname, $lname)
   {
      $this->first_name = $fname . "<br>";
      $this->last_name = $lname . "<br>";
   }

   public function __unset($property)
   {

      unset($this->$property);
   }
}

$test = new student();
$test->setName("Ninad", "Prabhune");

// unset($test->course);
// echo $test->course;

unset($test->first_name);
var_dump($test);
?>