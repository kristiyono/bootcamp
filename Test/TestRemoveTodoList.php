<?php 
    require_once "../Model/TodoList.php";
    require_once "../BusnissLogic/RemoveTodoList.php";
    require_once "../BusnissLogic/AddTodoList.php";
    require_once "../BusnissLogic/ShowTodoList.php";

    AddTodoList("David");
    AddTodoList("Kristiyono");
    AddTodoList("Bayu");
    AddTodoList("Difa");
    AddTodoList("Ramadhan");


    RemoveTodoList(3);
    ShowTodoList();

    RemoveTodoList(2);
    ShowTodoList();

    RemoveTodoList(2);
    ShowTodoList();

?>