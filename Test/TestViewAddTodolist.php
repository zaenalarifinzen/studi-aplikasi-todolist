<?php

require_once "./View/ViewAddTodolist.php";
require_once "./BusinessLogic/AddTodolist.php";
require_once "./BusinessLogic/ShowTodolist.php";

addTodolist("Bangun");
addTodolist("Cuci muka");
addTodolist("Mandi");
addTodolist("Sarapan");

showTodolist();

viewAddTodolist();

showTodolist();

viewAddTodolist();

showTodolist();