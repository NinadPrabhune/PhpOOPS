<!-- 
   sleep initilized before unserialize function

    sleep used to return limited property to array

    wakeup used for dc connection
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

   public function __wakeup()
   {
      echo "This is wakeup Methode ";
   } 
}

$test = new student();
$test->setName("Ninad", "Prabhune");
$srl=serialize($test);
$uns=unserialize($srl);
var_dump($uns);


?>