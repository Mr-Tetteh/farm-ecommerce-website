<?php

class UserOrder extends Db_object {
    protected static $db_table = 'user_orders';
    protected static $db_table_fields = array('product_name','product_price','product_discription', 'qty', 'grand_total', 'image', 'user_id', 'reference', 'amount', 'transaction_id', 'firstname', 'lastname', 'email', 'address', 'country', 'city', 'zip', 'payment_method', 'shipping_address', 'shipping_method');

    public $id;
    public $product_name;
    public $product_price;
    public $product_discription;
    public $grand_total ;
    public $image;
    public $user_id;
    public $reference;
    public $amount;
    public $qty = 1;
    public $transaction_id;

    public $firstname;
    public $lastname;
    public $email;
    public $address;
    public $country;
    public $city;
    public $zip;
    public $shipping_address;
    public $payment_method;
    public $shipping_method;
    


    public function __construct(
        $product_name = "",
        $product_price = "",
        $product_discription = "",
        $qty = "",
        $grand_total = "",
        $image = "",
        $user_id = "",
        $reference = "",
        $amount = "",
        $transaction = "",

        $firstname = "",
        $lastname = "",
        $email = "",
        $address = "",
        $country = "",
        $city = "",
        $zip = "",
        $shipping_address = "",
        $payment_method = "",
        $shipping_method = "",
    )
    {
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->product_discription = $product_discription;
        $this->qty = $qty;
        $this->grand_total = $grand_total;
        $this->image = $image;
        $this->user_id = $user_id;
        $this->reference = $reference;
        $this->amount = $amount;
        $this->transaction_id = $transaction;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->address = $address;
        $this->country = $country;
        $this->city = $city;
        $this->zip = $zip;
        $this->shipping_address = $shipping_address;
        $this->payment_method = $payment_method;
        $this->shipping_method = $shipping_method;

    }

    public static function getUserOrders()
    {
        $sql = "SELECT * FROM " . self::$db_table . " GROUP BY reference";
        return $the_result_array = self::find_by_query($sql);

        //return !empty($the_result_array) ? array_shift($the_result_array) : false;

    }

    public static function groupOrders($transaction_id)
    {
        $sql = "SELECT * FROM " . self::$db_table . " WHERE transaction_id = $transaction_id";
        return $the_result_array = self::find_by_query($sql);

        // !empty($the_result_array) ? array_shift($the_result_array) : false;
    }



}