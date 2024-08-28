<?php
class Base{
    public static $name="nasir";
    public function show(){
        echo static::$name;
    }
}
class Derived extends Base{
    public static $name="naeem";
}
$test=new Derived();
$test->show();
?>