<?php

require_once "../Model/Todolist.php";
require_once "../BusinessLogic/AddTodolist.php";

addTodolist("Makan");
addTodolist("Minum");
addTodolist("Tidur");

var_dump($todolist);