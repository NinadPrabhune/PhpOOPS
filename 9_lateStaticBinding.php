<!-- Where to use it ?

-   Where a function is overridden and you want to display the new properties.

-   Where the program is too big, and you cannot write the same function again and again. 

-   Instead of using the self, 
    you use the static keyword that references an exact class that is called at runtime.
-->

<?php

class Model
{
    protected static $tableName = 'Model';

    public function getTableName()          // u can write static      
    {
        echo "<br>";
        echo "<br>";
        echo self::$tableName;
        echo "<br>";
        echo static::$tableName;            //It will reference the class that is called at runtime.

        // return self::$tableName;         // return Model
        //return static::$tableName;          // *return User
    }
}

class User extends Model
{
    protected static $tableName = 'User';
}

$res = new Model();
$rs = $res->getTableName();
// var_dump($rs);


$res1 = new User();
$rs1 = $res1->getTableName();
// var_dump($rs1);

//echo User::getTableName(); // User

?>