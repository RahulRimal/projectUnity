<?php require('core/init.php');?>

<?php

// $topic = new Topic();

if(isset($_POST['create_topic_btn']))
{

    $topic = new Topic();
    $validate = new Validator();

    $topicData = array();
    $topicData['topic_title'] = $_POST['topic_title'];
    $topicData['topic_body'] = $_POST['topic_body'];
    $topicData['topic_category'] = $_POST['topic_category'];

    $nonEmptyField = array('topic_title', 'topic_body', 'topic_category');

    if($validate->isRequired($nonEmptyField))
    {
        if($topic->create($topicData))
        {
            redirect('index.php', 'Your topic has been posted', 'success');
        }
        else
            redirect('index.php', 'Failed to post the topic', 'error');
    }


}


$template = new Template('templates/create_topic.php');


echo $template;
?>