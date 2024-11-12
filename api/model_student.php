<?php
require("./initialData.php");
class Student {
    function allStudents(){
        $query = "SELECT * FROM students";
        returnJson( runQuery($query) );
    }
}