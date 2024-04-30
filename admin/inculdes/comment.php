<?php


class Comment extends Db_object{
    protected static $db_table = 'comments';
    protected static $db_table_fields = array('username', 'content');

    public $id;

    public $username;
    public $content;

    public static function create_comment($username = "John", $content = ""){
        if (!empty($username) && !empty($content)) {
            $comment = new Comment(); //instantiate; then use it

            $comment->username = $username;
            $comment->content = $content;

            return $comment;


        } else {

            return false;
        }

    }

    public static function get_comment(){
        global $database;

        $result_set = $database->query("SELECT username, content  FROM " . static::$db_table . "");

        $userComment = [];

        while($row = mysqli_fetch_array($result_set)){
            $userData[] = $row;
        };

        return $userComment;

    }
}
