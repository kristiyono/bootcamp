<?php 

//Remove Todo List
function RemoveTodoList(int $number): bool
{
    # code...
    global $todoList;

    if ($number > sizeof($todoList)) {
        # code...
        return false;
    }
    
    for ($i=$number; $i <= sizeof($todoList) ; $i++) { 
        # code...
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[sizeof($todoList)]);

    return true;
}

?>