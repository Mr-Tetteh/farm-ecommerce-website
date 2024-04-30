<?php

class Customer extends Db_object {

    protected static $db_table = 'customer';
    protected static $db_table_fields =  array('first_name', 'last_name', 'password', 'email', 'country', 'city', 'contact', 'role');

    public $id;

    public $first_name;
    public $last_name;

    public $password;
    public $email;
    public $country;
    public $city;
    public $contact;
    public $role = 'buyer';





    public static function verify_customer($email, $password){

        global $database;

        $username = $database->escape_string($email);
        $password = $database->escape_string($password);

        if (self::verify_user_password($email, $password)) {

            $sql = "SELECT * FROM " . self::$db_table . " WHERE email = '{$email}' ";
            $the_result_array = self::find_by_query($sql);
        }
        return !empty($the_result_array) ? array_shift($the_result_array) : false;

    }

    protected static function verify_user_password($email, $password){
        global $database;

        $sql = "SELECT password From " . self::$db_table . " WHERE email = '$email'";
        $result = $database->query($sql);
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        if (password_verify($password, $hashed_password)) {
            return true;
        } else {
            return false;
        }
    }




}