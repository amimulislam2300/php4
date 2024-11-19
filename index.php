<?php
class Car{
    public $name;
    public $model;
    
    function __destruct(){
        echo"<br>this is destruct";
    }

    function __construct($myname,$mymodel){
    $this->name = $myname;
    $this->model = $mymodel;
    }

    function info(){
        return $this->name."<br>".$this->model;
    }
 

}
$obj = new Car("Amin","400");
echo $obj->info();


?>