

<?php
include('includes/connect.php');
include('includes/send_text.php');

	$firstname=$_POST['surname'];
  $othernames=$_POST['other_names'];
  $mobileno=$_POST['phone'];
 

if(isset($_POST['submit']))
  

{
  //if($firstname=='' || $othernames=='' || $mobileno=='')
  if(!isset($firstname) ||!isset($othernames) || !isset($mobileno))
  {
    echo "please fill the empty field.";

  }
  else
  {
    $sql="INSERT into patients(surname,other_names,phone)values('$firstname','$othernames','$mobileno')"; 
    $qury=mysql_query($sql);
    if(!$qury)
    { 
	     echo mysql_error();
    }
    else
    {
	     echo "Details successfully inserted";
	     send_sms($mobileno,'Hallo, '.$firstname.' you have been successfully registered to the eagles plartform.');
    }
  }
}
?>