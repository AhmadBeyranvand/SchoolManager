<?php
require_once("./initialData.php");


class Classrooms 
{

    function rawList(bool $withEmpties = true) {
        $query = "initial";
        if ($withEmpties) {
            $query = "Select * from Classrooms;";
        } else {
            $countOfStudents = " SELECT count(*) as cnt, c.id as clsid FROM  schoolmanager.Classrooms as c
            INNER JOIN schoolmanager.Students as s
            ON c.id = s.classroom_id 
            GROUP BY c.id  ";
            $idOfNonEmptyClasrooms = "SELECT clsid from ($countOfStudents) as tbl WHERE cnt>0";
            $listOfNonEmptyClasrooms = "SELECT * FROM schoolmanager.Classrooms as cls2 WHERE cls2.id IN ($idOfNonEmptyClasrooms)";
            $query = $listOfNonEmptyClasrooms;
        }
        return $query;
    }
}
