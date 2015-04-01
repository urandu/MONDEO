<?php     
Include('connect.php');
Include('send_text.php');

If(isset($_POST['submit'])!='')
{
If($_POST['surname']=='' || $_POST['othernames']=='' || $_POST['mobileno']=='')
{
echo "please fill the empty field.";
}
Else
{
$sql="insert into ford(surname,othernames,mobileno) values('".$_POST['surname']."', '".$_POST['othernames']."', '".$_POST['mobileno']."')";
$res=mysql_query($sql);
If($res)
{
echo "Record successfully inserted";
send_sms($_POST['mobileno'],'Hallo, '.$_POST['surname'].' you have been successfully registered to the eagles plartform.');
}
Else
{
echo "There is a problem entering details.Please fill again.";
}


}
}

?>
