<?php require('core/init.php');?>

<?php

$forum = new Topic(); 

$template = new Template('templates/forum.php');

if(isset($_GET['topic']))
{
    $id = $_GET['topic'];
    $template->topic = $forum->getForum($id);
    $template->replies = $forum->getReplyingUsers($id);

    echo $template;
}
else
    header('Location: '.BASE_URL);

?>