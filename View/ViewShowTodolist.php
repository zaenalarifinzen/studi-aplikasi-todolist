<?php

require_once "./Model/Todolist.php";
require_once "./BusinessLogic/ShowTodolist.php";
require_once "./Helper/Input.php";
require_once "./View/ViewAddTodolist.php";
require_once "./View/ViewRemoveTodolist.php";

function viewShowTodolist(){
    

    while (true) {
        showTodoList();

        echo "Menu: " . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");
        if ($pilihan == "1") {
            viewAddTodolist();
        } elseif ($pilihan == "2") {
            viewRemoveTodolist();
        } elseif ($pilihan == "x") {
            // keluar
            break;
        } else {
            echo "Pilihan tidak valid" . PHP_EOL;
        }
    }

    echo "Sampai jumpa di lain waktu" . PHP_EOL;
}