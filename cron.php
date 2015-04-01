<?php
/**
 * Created by IntelliJ IDEA.
 * User: bildad
 * Date: 01/04/15
 * Time: 03:33
 */

include_once('/includes/connect.php');
include_once('/includes/send_text.php');

$sql = 'SELECT * FROM medication WHERE next_time <=NOW()';

$result = mysql_query( $sql, $conn );
if(! $retval )
{
    die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "EMP ID :{$row['emp_id']}  <br> ".
        "EMP NAME : {$row['emp_name']} <br> ".
        "EMP SALARY : {$row['emp_salary']} <br> ".
        "--------------------------------<br>";
}
echo "Fetched data successfully\n";
mysql_close($conn);