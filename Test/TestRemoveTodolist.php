<?php

require_once "./Model/Todolist.php";
require_once "./BusinessLogic/AddTodolist.php";
require_once "./BusinessLogic/ShowTodolist.php";
require_once "./BusinessLogic/RemoveTodolist.php";

addTodolist("Bangun");
addTodolist("Mandi");
addTodolist("Sarapan");
addTodolist("Berangkat Kerja");

showTodolist();

removeTodolist(3);

showTodolist();

removeTodolist(2);

showTodolist();

$succes = removeTodolist(3);
var_dump($succes);
showTodolist();