<?php 

require_once "../BusnissLogic/ShowTodoList.php";
require_once "../BusnissLogic/AddTodoList.php";
require_once "../BusnissLogic/RemoveTodoList.php";
require_once "../Helper/Input.php";

function ViewShowTodoList()
{
    while (true) {
        # code...
        ShowTodoList();

        echo "Menu". PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("pilih");

        if ($pilihan == "1") {
            # code...
            ViewAddTodoList();
        }elseif ($pilihan == "2") {
            # code...
            ViewRemoveTodoList();
        }elseif ($pilihan == "x") {
            # code...
            // keluar
        }else {
            echo "Pilihan Tidak Mengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Kembali";
}

?>