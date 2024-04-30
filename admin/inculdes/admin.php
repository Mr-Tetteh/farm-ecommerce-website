<?php


class Admin extends Db_object{

    protected static $db_table = 'admin_user';
    protected static $db_table_fields = array( 'username', 'user_firstname', 'user_lastname', 'admin_password', 'email', 'contact', 'role');

    public $id;
    public $username;

    public $user_firstname;
    public $user_lastname;

    public $admin_password;
    public $email;
    public $contact;
    public $role = 'Admin';


    public static function verify_admin($email, $password){

        global $database;

        $email = $database->escape_string($email);
        $password = $database->escape_string($password);

        if(self::verifyPassword($email, $password)) {
            $sql = "SELECT * FROM " . self::$db_table . " WHERE email = '{$email}' ";
            $the_result_array = self::find_by_query($sql);
        }

        return !empty($the_result_array) ? array_shift($the_result_array) : false;

    }

    protected static function verifyPassword($email, $password){
        global $database;
        $sql = "SELECT admin_password FROM " . self::$db_table . " WHERE email = '$email'";
        $result = $database->query($sql);
        $row = $result->fetch_assoc();
        $hashed_password = $row['admin_password'];


        if (password_verify($password, $hashed_password)) {
            return true;
        } else {
            return false;
        }
    }


}