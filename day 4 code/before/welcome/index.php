<?php
if (!isset($_REQUEST['firstname'])) // 1
{
  include 'form.html.php'; // 2
}
else // 3
{
  $firstname = $_REQUEST['firstname'];
  $lastname = $_REQUEST['lastname'];
  if ($firstname == 'Kevin' and $lastname == 'Yank')
  {
    $output = 'Welcome, oh glorious leader!'; // 4
  }
  else
  {
    $output = 'Welcome to our web site, ' .
        $firstname . ' ' .
        $lastname . '!';
  }
  include 'welcome.html.php'; // 5
}
?>