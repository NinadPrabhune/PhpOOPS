<!-- 
    Cannot print object as string outside class directely then  __tostring used
 -->

<?php


class student
{

   public function __toString()
   {
      return "Can't print object as string of class :-". get_class($this);
      
   }

   
}

$test = new student();

echo $test; // fatal eror



?>