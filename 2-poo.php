<?php
class my_class
{
var $my_var;
function my_class ($var)
{
global $obj_instance;
$obj_instance[] = &$this;
$this->my_var = $var;
}
}
$obj = new my_class ('something');
$obj->my_var = 'nothing';
echo $obj->my_var;
echo $obj_instance[0]->my_var;
/*Implementing Inheritance*/
/*magic functions __sleeep __wakeup*/