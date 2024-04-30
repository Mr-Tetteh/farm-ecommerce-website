<?php


class Product extends Db_object {
    protected static $db_table = 'proudct';
    protected static $db_table_fields =  array('categories', 'product_name', 'product_price', 'product_description', 'image', 'product_keywords', 'usr_id', 'contact');

    public $id;
    public $categories;
    public $product_name;
    public $product_price;
    public $product_description;
    public $product_keywords;
    public $image;
    public $usr_id;
    public $contact;




    public function sort_asc(){
        global $database;
        $sql =  "SELECT * FROM ". self::$db_table . " ORDER BY product_price ASC ";

    }

    public function search($item){
        global $database;
        $sql = "SELECT * FROM " . self::$db_table . " WHERE product_keywords LIKE '%$item%' ";
        $result_set =  $database->query($sql);

        return $result_set;
    }




}