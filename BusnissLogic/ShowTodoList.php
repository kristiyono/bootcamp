<?php 

//Menampilkan Todo List
function ShowTodoList()
{
    global $todoList;

    echo "Aplikasi Todo List";

    foreach ($todoList as $number => $value) {
        echo "$number . $value";
    }
}

?>