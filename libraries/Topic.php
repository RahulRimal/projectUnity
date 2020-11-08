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
            WHERE topic_id = :topic_id");
        $this->db->bind(':topic_id', $topic_id);

        $result = $this->db->resultset();
        return $result;
    }



    public function create($data)
    {
        $this->db->query("INSERT INTO `forum_topic`(user_id, category_id, topic_title, topic_body) VALUES (:user_id, :category_id, :topic_title, :topic_body)");
        $this->db->bind(':user_id', '1');
        $this->db->bind(':category_id', $data['topic_category']);
        $this->db->bind(':topic_title', $data['topic_title']);
        $this->db->bind(':topic_body', $data['topic_body']);

        if($this->db->execute())
            return true;
        else
            return false;
    }

}

?>