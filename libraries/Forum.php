<?php

class Forum
{

    private $db;


    public function __construct()
    {
        $this->db = new Database();
    }


    public function getAllTopics()
    {
        $this->db->query("SELECT * from `forum_topic`,
            
            ORDER BY topic_created_date DESC");

        $result = $this->db->resultset();

        return $result;
    }










}

?>