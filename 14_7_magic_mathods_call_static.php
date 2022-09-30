<!-- when you r trying to Call Non existing  or private Static Function directely outside class in give 
undefined Method / fatal error message  -->
<!-- to avoide this  error massage we  use __Clall method -->

<!-- It automatically Call when You trying to Call non existing or private Static Function -->


<!-- __Call method used to Cll private Static Function  from outside Class -->

<?php


class student
{



    private static function hello()
    {

        echo "This is Private static Method";
    }

    public static function __callstatic($method, $args)
    {

        if (method_exists(__class__, $method)) {
            call_user_func_array([__class__, $method], $args);
        } else {
            echo " Method Doesnot Exist- '" . $method . "' <br>";
        }
    }
}
student::hello();
?>