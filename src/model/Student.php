<?php

namespace AMCC\MVC\Model;

use AMCC\MVC\Config\Database;

class Student
{
    public $id;
    public $name;
    public $classroom;

    public function __construct($id, $name, $classroom)
    {
        $this->id = $id;
        $this->name = $name;
        $this->classroom = $classroom;
    }

    public static function All()
    {
        $results = Database::getConnection()->query('SELECT * FROM students')
            ->fetch_all(MYSQLI_ASSOC);

        $datas = [];
        foreach ($results as $result) {
            $data = new Student($result['id'], $result['name'], $result['address']);
            array_push($datas, $data);
        }

        return $datas;
    }
}
