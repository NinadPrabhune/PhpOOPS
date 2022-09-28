
<!-- when you r trying to SET value to undefined property or private property directely outside class in give 
undefined property / fatal error message  -->
<!-- to avoide this  error massage we  use __Set method -->

<!-- It automatically Call when You trying to set value to non existing or Private property -->


<!-- __set method used to set private property value from outside function -->

<?php


class abc{

    private $name;

    public function Show(){
        echo $this->name;
    }
  
    public function __get($property){
        echo "You are trying to access Undefine Or Private property - '".$property."'";
    }

    public function __Set($property, $value){

        if(property_exists($this , $property)){

            $this->$property = $value;

        }else{

            echo " Property does not exist : '".$property."'";

        }


        
    }
   
}
   
   $test = new abc();
   $test->name="ninad";
   $test-> Show();







?>