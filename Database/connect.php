<?php
class Connect
{
    // singleton pattern for mysql database connection
    // prevents having multiple instances of the same database connection
    private $db_hostname = 'localhost';
    private $db_database = 'product_review_analysis';
    private $db_username = 'root';
    private $db_password = '';
    private static $_instance;
    private $db_connection;

    /*
    this static function is used to return the instance of the class use the returned instance to
    obtain the connection to database instance
     */
    public static function getInstance()
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    /*
    constructor to initialize the database connection
     */
    private function __construct()
    {
        $this->db_connection = new mysqli($this->db_hostname, $this->db_username
            , $this->db_password, $this->db_database);
    }
    /*
    this function returns the instance of database connection use it after obtaining
    the instance of the class using the getInstance() function
     */
    public function getConnection()
    {
        return $this->db_connection;
    }
    // prevent cloning the connection
    private function __clone()
    {}
    /*
    this function is called when theres no reference to the database connection..i.e:end of php script
     */
    public function __destruct()
    {
        mysqli_close($this->db_connection);
    }
}
