
<!-- when you r trying to Call Non existing  or private Function directely outside class in give 
undefined Method / fatal error message  -->
<!-- to avoide this  error massage we  use __Clall method -->

<!-- It automatically Call when You trying to Call non existing or Private Function -->


<!-- __Call method used to Cll private function  from outside Class -->

<?php


class student{

    private $first_name;
    private $last_name;

    private function setName($fname,$lname){
        echo $this->first_name=$fname;
        echo $this->last_name=$lname;
    }
  
    

    public function __Call($method, $args){

        

        if(method_exists($this , $method)){

            call_user_func_array([$this,$method],$args);

        }else{

            echo "This is Private Or Non Existing Method - '".$method."' <br>";

        }        
    }   
}
   
   $test = new student();

   $test->setName("Ninad", "Prabhune");
  
    echo "<pre>";

    print_r($test);

    echo "</pre>";





?>