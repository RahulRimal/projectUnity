<?php require('core/init.php');?>

<?php

$forum = new Topic();

$template = new Template('templates/front_page.php');

$template->topics = $forum->getAllTopics();

echo $template;

?>