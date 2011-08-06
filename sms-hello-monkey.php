<?php
// make an associative array of senders we know, indexed by phone number
$people = array(
"+16465304568"=>"Emily",
"+14158675310"=>"Boots",
"+14158675311"=>"Virgil",
);
// if the sender is known, then greet them by name
// otherwise, consider them just another monkey
if(!$name = $people[$_REQUEST['From']])
$name = "Fun Party Person";
// now greet the sender
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
<Sms><?php echo $name ?>, come to our party! 135 Conselyea Street 3A, on the Graham stop of the L. Call Emily to come up to the roof: 6465304568. See you soon!</Sms>
</Response>