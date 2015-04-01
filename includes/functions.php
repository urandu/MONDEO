<?php
/**
 * Created by IntelliJ IDEA.
 * User: bildad
 * Date: 02/04/15
 * Time: 00:58
 */
include_once('connect.php');

//function that returns the surname of the user
function get_surname($patient_id, $con)
{

    $sql="GET surname FROM patients WHERE patient_id=".$patient_id;
    $result=mysql_query($sql,$con);
    if(!$result)
    {
        echo('error in getting surname: '.mysql_errno());
    }else
    {
        $surname=mysql_fetch_assoc($result);
        return $surname['surname'];
    }
}