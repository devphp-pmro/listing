<?php


namespace Source\bd;

use PDO;

require_once __DIR__."/../../vendor/autoload.php";
class Connect
{
    private $connect;

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->$name = $value;
    }


    public function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->name;
    }

    public function __construct()
    {
        $this->getInstance();
    }

    public function getInstance()
    {
        $this->conect = new pdo("mysql:host=".DB['host'].";dbname=".DB['data_base']."", DB['user'], DB['password'],
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        if (!$this->conect) {
            print_r($this->conect->errorInfo());
        }
        return $this->conect;
    }

    public function prepare($sql)
    {
        return $select = self::getInstance()->prepare($sql);
    }

}