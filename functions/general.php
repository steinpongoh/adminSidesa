<?php
require_once 'dbconnect.php';

function query($query)
{
    global $dbconnect;
    $result = mysqli_query($dbconnect, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapusData($id,$target)
{
    global $dbconnect;
    mysqli_query($dbconnect, "DELETE FROM `$target` WHERE id=$id");}
?>

