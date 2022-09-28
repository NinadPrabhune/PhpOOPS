<!-- 
   sleep initilized before serialize function

    sleep used to return limited property to array
 -->

<?php


class student
{

   public $course = 'PHP';
   private $first_name;
   private $last_name;

   public function setName($fname, $lname)
   {
      $this->first_name = $fname;
      $this->last_name = $lname;
   }

   public function __sleep()
   {
      return array("first_name","last_name");
   } 
}

$test = new student();
$test->setName("Ninad", "Prabhune");
$srl=serialize($test);
var_dump($srl);


?>