<?php
// Be sure to include the file you've just downloaded
require_once('AfricasTalkingGateway.php');

function send_sms($number,$msg)
{




    // Specify your login credentials
    $username   = "urandu";
    $apikey     = "1677ae70e5d03411d857f3c22e046441681af2f56c3052cadad3f0305aaa3218";

// Specify the numbers that you want to send to in a comma-separated list
// Please ensure you include the country code (+254 for Kenya in this case)
    $recipients = $number;//enter the phone numbers you wish to send the texts to.....here

// And of course we want our recipients to know what we really do
    $message    = $msg;

// Create a new instance of our awesome gateway class
    $gateway    = new AfricasTalkingGateway($username, $apikey);

// Any gateway errors will be captured by our custom Exception class below,
// so wrap the call in a try-catch block
    try
    {
        // Thats it, hit send and we'll take care of the rest.
        $results = $gateway->sendMessage($recipients, $message);
        foreach($results as $result) {
            // Note that only the Status "Success" means the message was sent
            echo " Number: " .$result->number;
            echo " Status: " .$result->status;
            echo " MessageId: " .$result->messageId;
            echo " Cost: "   .$result->cost."\n";
        }
    }
    catch ( AfricasTalkingGatewayException $e )
    {
        echo "Encountered an error while sending: ".$e->getMessage();
    }

// DONE!!!






}
