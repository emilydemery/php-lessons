<?php
 
    $people = array(
        "+16465304568"=>"Emily",
    );

    if(!$name = $people[$_REQUEST['From']])
        $name = "Fun Party Person";
 
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Sms><?php echo $name ?>, can you bring ice?</Sms>
</Response>