<?php


class User extends Db_object
{

    protected static $db_table = 'customer';
    protected static $db_table_fields = array('username', 'user_firstname', 'user_lastname', 'password', 'email');

    public $id;

    public $username;
    public $user_firstname;

    public $user_lastname;
    public $password;
    public $email;
    public $role;


    public static function verify_user($email, $password){

        global $database;

        $email = $database->escape_string($email);
        $password = $database->escape_string($password);

        $sql = "SELECT * FROM " . self::$db_table . " WHERE email = '{$email}' ";
        $the_result_array = self::find_by_query($sql);

        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    protected static function verify_user_password($email, $password)
    {
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

