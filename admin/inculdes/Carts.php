<?php


class Carts extends Db_object {
    protected static $db_table = 'cart';
    protected static $db_table_fields = array('product_name', 'product_price', 'product_discription', 'qty', 'grand_total', 'image', 'user_id', 'product_id');

    public $id;
    public $product_name;
    public $product_price;
    public $grand_total ;
    public $product_discription;
    public $image;
    public $user_id;
    public $product_id;
    public $qty = 1;






}



