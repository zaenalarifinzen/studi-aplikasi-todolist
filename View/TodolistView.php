<?php
namespace View {

    use Service\TodolistService;
    use Helper\InputHelper;

    class TodolistView {

        private TodolistService $todolistService;

            public function __construct(TodolistService $todolistService)
            {
                $this->todolistService = $todolistService;
            }

        function showTodolist() : void 
        {
            while (true) {
                $this->todolistService->showTodoList();

                echo "Menu: " . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih");
                if ($pilihan == "1") {
                    $this->addTodolist();
                } elseif ($pilihan == "2") {
                    $this->removeTodolist();
                } elseif ($pilihan == "x") {
                    // keluar
                    break;
                } else {
                    echo "Pilihan tidak valid" . PHP_EOL;
                }
            }

            echo "Sampai jumpa di lain waktu" . PHP_EOL;
        }

        function addTodolist() : void
        {

        }

        function removeTodolist() : void
        {

        }

    }

}