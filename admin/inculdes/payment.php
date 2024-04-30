<?php


class Payment extends Db_object {
    protected static $db_table = 'payments';
    protected static $db_table_fields =  array('firstname', 'lastname', 'email', 'address', 'country', 'city', 'zip', 'payment_method', 'shipping_address', 'shipping_method');

    public $id;

    public $firstname;
    public $lastname;

    public $email;
    public $country;
    public $address;
    public $city;

    public $zip;
    public $payment_method;
    public $shipping_address;
    public $shipping_method;










}