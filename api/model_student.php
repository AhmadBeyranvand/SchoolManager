<?php
require("./initialData.php");
class Student {
    function allStudents(){
        $query = "SELECT * FROM students";
        returnJson( runQuery($query) );
    }

    function searchStudent (string $fullName){
        $query = `SELECT s.id, s.fullName, s.fatherName, s.nationalCode, c.title 
                FROM Students as s
                inner join Classrooms as c
                on c.id=s.classID
                where fullName like '%$fullName%'`;
        returnJson(runQuery($query));
    }
}