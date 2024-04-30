<?php

class Farmer extends Db_object {
    protected static $db_table = 'farmer_user';
    protected static $db_table_fields =  array('farmer_email', 'username', 'password', 'farmer_firstname', 'farmer_lastname', 'contact');

    public $id;

    public $farmer_firstname;
    public $farmer_lastname;

    public $username;

    public $password;
    public $farmer_email;

    public $contact;


    public static function verify_farmer($email, $password){

        global $database;

        $email = $database->escape_string($email);
        $password = $database->escape_string($password);

        if(self::verifyPassword($email, $password)) {
            $sql = "SELECT * FROM " . self::$db_table . " WHERE farmer_email = '{$email}' ";
            $the_result_array = self::find_by_query($sql);
        }

        return !empty($the_result_array) ? array_shift($the_result_array) : false;

    }

    protected static function verifyPassword($email, $password){
        global $database;
        $sql = "SELECT password FROM " . self::$db_table . " WHERE farmer_email = '$email'";
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