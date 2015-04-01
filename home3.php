<?php     
include('includes/connect.php');
include('includes/send_text.php');


 $stime=$_POST['start_time'];
 $dose=$_POST['dosage'];


if(isset($_POST['submit']))
{
  if(!isset($stime) || !isset($dose))
  {
     echo "please fill the empty field.";
  }
    else
    {
     $sql="INSERT into medication(start_time,dosage)values('$stime', '$dose')";
     $qury=mysql_query($sql);
     if($qury)
     {
        echo "Record successfully inserted";
        send_sms($mobileno,'Hallo, '.$firstname.'  you are to start taking'.$dose.' at '$stime' ');
     }
     else
      {
       echo "There is a problem entering details.Please fill again.";
      }
  
  }
}

?>
