<?php

namespace AbstractClasses;

abstract class Unit implements \Interfaces\UnitActiveInterface
{
    public $id;


    public function deleteLine() : bool
    {

    }
    public function updateLine() : bool
    {
        
    }


    /*construct срабатывает автоматом при создании объекта */
    public function __construct(int $id)
    {
        $this->id = $id;
    }


    public static function getLinesApi() {
        $data = file_get_contents("http://nginx/api/get/" . static::TABLE . "/list/index.php");
        return json_decode($data, true);
    }

    public static function getLinesApiId(int $number) {
        $data = file_get_contents("http://nginx/api/get/" . static::TABLE . "/id/index.php?id=" . $number);
        return json_decode($data, true);
    }
    
    public static function getLinesApiShort(int $number) {
        $data = file_get_contents("http://nginx/api/get/" . static::TABLE . "/limit/index.php?limit=" . $number);
        return json_decode($data, true);
    }
}
