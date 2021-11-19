<?php 

require_once "../Model/TodoList.php";
require_once "../BusnissLogic/AddTodoList.php";

AddTodoList("David");
AddTodoList("Kristiyono");
AddTodoList("Laskar");


var_dump($todoList);

?>