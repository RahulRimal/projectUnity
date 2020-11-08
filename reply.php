<?php require('core/init.php')?>

<?php


$topic = new Topic();
$db = new Database();

if(isset($_POST['submit-reply-btn']))
{

    $repliedData = array();

    $repliedData['repliedText'] = $_POST['replybody'];
    $repliedData['topicId'] = $_GET['topic'];
    $repliedData['userId'] = getUserData()->id;

    if(empty($repliedData['repliedText']))
        redirect('topic.php?topic='.$repliedData['topicId'], 'Cannot Reply with Empty box', 'error');

    else
    {

        if($topic->replyToTopic($repliedData))
            redirect('topic.php?topic='.$repliedData['topicId'], 'Reply Successful', 'success');
        else
            redirect('topic.php?topic='.$repliedData['topicId'], 'Something went wrong, Please try again later !!', 'error');
    }

}
else
    redirect('topic.php?topic='.$repliedData['topicId'], 'Something went wrong, Please try again later !!', 'error');


?>