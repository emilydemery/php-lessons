<?php
// make an associative array of senders we know, indexed by phone number
$people = array(
"+16465304568"=>"Emily",
"+16462586961"=>"Jesse",
"+16304522502"=>"Ron",
"+19173196138"=>"Enia",
"+13474438558"=>"Nick",
"+16465227211"=>"Danielle",
);
// if the sender is known, then greet them by name
// otherwise, consider them just another monkey
if(!$name = $people[$_REQUEST['From']])
$name = "Hiya!";
// now greet the sender
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
<Sms><?php echo $name ?>come to our party! 135 Conselyea Street 3A, Graham stop off the L. Call Emily: 6465304568. See you!</Sms>
</Response>