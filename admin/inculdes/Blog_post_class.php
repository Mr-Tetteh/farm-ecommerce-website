<?php

class Blog_post extends Db_object {
    protected static $db_table = 'blog_post';
    protected static $db_table_fields = array('blog_image', 'blog_title', 'blog_content');

    public $id;
    public $blog_image;
    public $blog_title;
    public $blog_content;




    public function find_all_with_while(){
        global $database;

        $sql = "SELECT * FROM " .  static::$db_table . " ";
        $result_set =  $database->query($sql);
        return $result_set;


    }

}


?>