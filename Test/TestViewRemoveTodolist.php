<?php

require_once "./Model/Todolist.php";
require_once "./BusinessLogic/AddTodolist.php";
require_once "./BusinessLogic/ShowTodolist.php";
require_once "./View/ViewRemoveTodolist.php";

addTodolist("Bangun");
addTodolist("Cuci Muka");
addTodolist("Mandi");
addTodolist("Sarapan");

showTodolist();

viewRemoveTodolist();

showTodolist();