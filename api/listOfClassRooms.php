<?php
require_once("./model_classroom.php");

$withEmpties = ($_GET["with_empties"] && $_GET["with_empties"] == "yes") ? true : false;
$classroom = new Classrooms();
returnJson(runQuery( $classroom->rawList($withEmpties))) ;
