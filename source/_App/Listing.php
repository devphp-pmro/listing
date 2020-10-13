<?php


namespace Source\_App;


use Source\Bd\Connect;

class Listing
{
    /**
     * @var string[]
     */
    public $type = array("asc" => "ASC","desc" =>"DESC");


    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->$name = $value;
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->$name;
    }

    /**
     * @param $table
     * @param $optionValue
     * @param $visible
     */
    public function selectAll($table,$optionValue,$visible)
    {
        $select = (new Connect())->prepare("SELECT * FROM $table");
        $select->execute();
        $row = $select->fetchAll();
        foreach($row as $item) {
            echo "<option value='" . $item[$optionValue] . "'>" . $item[$visible] . "</option>";
        }
    }


    /**
     * @param $table
     * @param $optionValue
     * @param $visible
     * @param $orderBy
     * @param null $type
     */
    public function orderBy($table,$optionValue,$visible,$orderBy,$type = null)
    {
        $select = (new Connect())->prepare("SELECT * FROM $table order by $orderBy $type");
        $select->execute();
        $row = $select->fetchAll();
        foreach($row as $item) {
            echo "<option value='" . $item[$optionValue] . "'>" . $item[$visible] . "</option>";
        }
    }


    /**
     * @param $table
     * @param $optionValue
     * @param $visible
     * @param $groupBy
     * @param null $type
     */
    public function groupBy($table,$optionValue,$visible,$groupBy,$type = null)
    {
        $select = (new Connect())->prepare("SELECT * FROM $table group by $groupBy $type");
        $select->execute();
        $row = $select->fetchAll();
        foreach($row as $item) {
            echo "<option value='" . $item[$optionValue] . "'>" . $item[$visible] . "</option>";
        }
    }


    /**
     * @param $table
     * @param $optionValue
     * @param $visible
     * @param $groupBy
     * @param $orderBy
     * @param $type
     */
    public function groupOrderBy($table,$optionValue,$visible,$groupBy,$orderBy,$type)
    {
        $select = (new Connect())->prepare("SELECT * FROM $table group by $groupBy order by $orderBy $type");
        $select->execute();
        $row = $select->fetchAll();
        foreach($row as $item) {
            echo "<option value='" . $item[$optionValue] . "'>" . $item[$visible] . "</option>";
        }
    }






}