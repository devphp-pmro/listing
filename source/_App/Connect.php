<?php


namespace Source\_App;


use PDO;
require_once __DIR__."/../Config.php";

class Connect
{
    public $connect;

    public function __construct()
    {
        $this->getInstance();
    }

    public function getInstance()
    {
        $this->connect = new pdo("mysql:host=".DB['host'].";dbname=".DB['data_base']."", DB['user'], DB['password'],
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        if (!$this->connect) {
            print_r($this->connect->errorInfo());
        }
        return $this->connect;
    }

    public function prepare($sql)
    {
        return $select = self::getInstance()->prepare($sql);
    }


}