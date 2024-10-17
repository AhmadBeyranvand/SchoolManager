<?php
$con = mysqli_connect("localhost", "ahmad", "1881", "schoolmanager");
global $con;

function runQuery($query)   
{
    $result = [];
    global $con;
    $query = mysqli_query($con, $query);
    if (mysqli_num_rows($query) == 0) {
        echo "هیچ نتیجه‌ای یافت نشد" ;
    } else {
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($result, $row);
        }
        return $result;
    }
    return false;
}
