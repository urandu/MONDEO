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

while(true) {
    $result = mysql_query($sql, $conn);
    if (!$result) {
        echo('Could not get data: ' . mysql_error());
    }
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        //implement sending logic here i.e construct text message to send and increment next time


    }
}
