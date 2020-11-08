<?php require('core/init.php');?>

<?php

$forum = new Topic();

$template = new Template('templates/front_page.php');

if(isset($_GET['uid']))
{
    $userId = $_GET['uid'];
    $template->topics = $forum->getUserAllTopic($userId);
}

else
$template->topics = $forum->getAllTopics();

echo $template;

?>