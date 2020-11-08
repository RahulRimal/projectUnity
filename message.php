<?php require('core/init.php');?>

<?php

$db = new Database();

$template = new Template('templates/messages.php');

echo $template;


?>