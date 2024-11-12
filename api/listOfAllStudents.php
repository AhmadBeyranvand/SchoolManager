<?php
require("./model_student.php");

$st = new Student();

$st->searchStudent($_GET['fullname']);

?>