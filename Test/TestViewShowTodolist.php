<?php

require_once "./View/ViewShowTodolist.php";
require_once "./BusinessLogic/AddTodolist.php";

addTodoList("Bangun");
addTodoList("Cuci Muka");
addTodoList("Mandi");
addTodoList("Sarapan");

viewShowTodolist();