<?php

class Topic
{

    private $db;


    public function __construct()
    {
        $this->db = new Database();
    }


    public function getAllTopics()
    {
        $this->db->query("SELECT forum_topic.*,
            users.username, users.image, categories.category_name FROM forum_topic
            INNER JOIN users
            ON forum_topic.user_id = users.id
            INNER JOIN categories
            ON forum_topic.category_id = categories.id
            ORDER BY topic_created_date DESC");

        $result = $this->db->resultset();

        return $result;
    }

    public function getUserAllTopic($id)
    {
        $this->db->query("SELECT forum_topic.*,
            users.username, users.image, categories.category_name FROM forum_topic
            INNER JOIN users
            ON forum_topic.user_id = users.id
            INNER JOIN categories
            ON forum_topic.category_id = categories.id
            WHERE user_id = :userId
            ORDER BY topic_created_date DESC");
        
        $this->db->bind(':userId', $id);

        $result = $this->db->resultset();

        return $result;
    }


    public function getRepliesCount($topic_id)
    {
        $this->db->query("SELECT * FROM replies WHERE topic_id=:topic_id");
        $this->db->bind(':topic_id', $topic_id);
        $this->db->execute();
        $count = $this->db->rowCount();
        return $count;
        
    }

    public function getReplyingUsers($topic_id)
    {
        $this->db->query("SELECT replies.*, users.* FROM replies
            INNER JOIN users
            ON replies.user_id = users.id
            WHERE topic_id = :topic_id
            ORDER BY replied_date DESC");
        $this->db->bind(':topic_id', $topic_id);

        $result = $this->db->resultset();
        return $result;
    }

    public function create($data)
    {
        $this->db->query("INSERT INTO `forum_topic`(user_id, category_id, topic_title, topic_body) VALUES (:user_id, :category_id, :topic_title, :topic_body)");
        $this->db->bind(':user_id', getuserData()->id);
        $this->db->bind(':category_id', $data['topic_category']);
        $this->db->bind(':topic_title', $data['topic_title']);
        $this->db->bind(':topic_body', $data['topic_body']);

        if($this->db->execute())
            return true;
        else
            return false;
    }


    public function getForum($id)
    {
        $this->db->query("SELECT forum_topic.*,
        users.image, users.username
        FROM forum_topic
        INNER JOIN users
        ON forum_topic.user_id = users.id
        WHERE forum_topic.id=:topicId");

        $this->db->bind('topicId', $id);

        $result = $this->db->single();

        return $result;
    }

    public function replyToTopic($data)
    {
        $this->db->query("INSERT INTO `replies`(user_id, topic_id, reply_body) VALUES (:userId, :topicId, :replyBody)");
        $this->db->bind(':topicId', $data['topicId']);
        $this->db->bind(':userId', $data['userId']);
        $this->db->bind(':replyBody', $data['repliedText']);

        if($this->db->execute())
            return true;
        else
            return false;


    }

}

?>