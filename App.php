<?php

require_once "Model/Todolist.php";
require_once "BusinessLogic/ShowTodolist.php";
require_once "BusinessLogic/AddTodolist.php";
require_once "BusinessLogic/RemoveTodolist.php";
require_once "View/ViewShowTodolist.php";
require_once "View/ViewAddTodolist.php";
require_once "View/ViewRemoveTodolist.php";
require_once "Helper/Input.php";

echo "APLIKASI TODOLIST" . PHP_EOL;

viewShowTodolist();