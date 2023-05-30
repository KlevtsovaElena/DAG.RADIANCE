<?php

class Reviews extends \AbstractClasses\Unit
{
    
    const TABLE = 'reviews';
   
    public static function getLinesApiStatus(int $number) {
        $data = file_get_contents("http://nginx/api/get/" . static::TABLE . "/status/index.php?status=" . $number);
        return json_decode($data, true);
    }
}