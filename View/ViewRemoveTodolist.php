<?php

require_once "./Helper/Input.php";
require_once "./BusinessLogic/RemoveTodolist.php";

function viewRemoveTodolist(){
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan == "x") {
        echo "Batal menghapus todo";
    } else {
        $succes = removeTodolist($pilihan);

        if ($succes) {
            echo "Berhasil menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}