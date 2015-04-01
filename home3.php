<?php     
Include('connect.php');
Include('send_text.php');

If(isset($_POST['submit'])!='')
{
If($_POST['starttime']=='' || $_POST['dose']=='' ||)
{
echo "please fill the empty field.";
}
Else
{
$sql="insert into ford(starttime,dose) values('".$_POST['starttime']."', '".$_POST['dose']."')";
$res=mysql_query($sql);
If($res)
{
echo "Record successfully inserted";
send_sms($_POST['Hallo, '.$_POST['surname'].'  you are to start taking'.$_POST['dose'].'at'.$_POST['starttime']);
}
Else
{
echo "There is a problem entering details.Please fill again.";
}


}
}

?>
