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

    //сделать запись в любую таблицу
    public static function createLine() : bool
    {
        $strFields = '';
        $strValues = '';

        foreach ($_POST as $key => $value) {
                $strFields .= "`$key`,"; 
                $strValues .= "'$value',";

        }

        $strFields = trim($strFields, ',');
        $strValues = trim($strValues, ',');


        $sqlText = "INSERT INTO ". static::TABLE ."($strFields) VALUES($strValues)";

        $pdo = \Connection::getConnection();

        $pdo->query($sqlText);

        return true;
       
    }

    // public static function createLine() : bool
    // {
    //     $strFields = '';
    //     $strValues = '';

    //     foreach ($_POST as $key => $value) {
    //             $strFields .= "`$key`,"; 
    //             $strValues .= "'$value',";

    //     }

    //     $strFields = trim($strFields, ',');
    //     $strValues = trim($strValues, ',');


    //     $sqlText = "INSERT INTO ". static::TABLE ."($strFields) VALUES($strValues)";

    //     $pdo = \Connection::getConnection();

    //     $pdo->query($sqlText);

    //     return true;
       
    // }
}
    //получение всех записей таблицы или по условию
    // public static function getLines(int $number=null) : array
//     public static function getLines() : array
//     {
//         $filterStr = '';

//         $strFields = '';
//         $strValues = '';


//         // if ((isset($_GET['search']) && $_GET['search'] !== '')) {
//         //     $filterStr .= " AND product_name LIKE '%" . $_GET['search'] . "%' OR product_description LIKE '%" . $_GET['search'] . "%' ";
//         // }

//         foreach ($_GET as $key => $value) {
//             if ($key !== 'search' && $key !== 'orderBy' && $key !== 'limit') {
//                 $filterStr .= ' AND ' . $key . ' IN (' . $value . ')';  
//             }
//         }



//         if (isset($_GET['orderBy']) && $_GET['orderBy'] !== '') {
//             $filterStr .= ' ORDER BY '  . $_GET['field'] . ' '. $_GET['orderBy'];
//         }

//         if (isset($_GET['limit']) && $_GET['limit'] !== '') {
//             $filterStr .=  ' LIMIT ' . $_GET['limit'];
//         }

//         $sqlText = 'SELECT * FROM `' . static::TABLE . '` WHERE 1 ' . $filterStr;

//         $pdo = \Connection::getConnection();
//         $result = $pdo->query($sqlText);
         
//         $tableItem = [];
//         while ($row = $result->fetch())
//         {
//             $tableItem[] = $row;
//         } 

//         return $tableItem;
    
//     }

// }









    //сделать запись в любую таблицу
//     public static function createLine() : bool
//     {
//         $strFields = '';
//         $strValues = '';

//         foreach ($_POST as $key => $value) {
//                 $strFields .= "`$key`,"; 
//                 $strValues .= "'$value',";

//         }

//         $strFields = trim($strFields, ',');
//         $strValues = trim($strValues, ',');


//         $sqlText = "INSERT INTO ". static::TABLE ."($strFields) VALUES($strValues)";

//         $pdo = \Connection::getConnection();

//         $pdo->query($sqlText);

//         return true;
       
//     }


//     //поиск из любой таблицы
//     public static function search()
//    {
//         $search = $_GET['search'];

//         //заходим в базу 
//         $pdo = \Connection::getConnection();
        
//         $searchString = "";

//         //собираем сроку запросу. Впишем все указанные в классе поля, в которых необх сделать поиск FIELDSEARCH
//         for ($i=0; $i < count(static::FIELDSEARCH); $i++) {
//             $searchString .= static::FIELDSEARCH[$i] . " LIKE '%$search%' OR "; 
//         }

//         //удаляем последние лишние символы
//         $searchString = trim($searchString, 'OR ');


//         $sqlText = "SELECT * FROM `" . static::TABLE ."` WHERE " . $searchString .";";

//         //запишем резальтата запроса в переменную $result
//         $result = $pdo->query($sqlText);
         
//         $tableItem = [];
//         while ($row = $result->fetch())
//         {
//             $tableItem[] = $row;
//         } 

//         return $tableItem;
//     }
// }






// <?php

// namespace AbstractClasses;

// abstract class Unit implements \Interfaces\UnitActiveInterface
// {
//     public $id;
//     protected $data;

//     /*construct срабатывает автоматом при создании юзера */
//     public function __construct(int $id)
//     {
//         $this->id = $id;
//     }


//     //срабатывает, когда хотят прочитать закрытую перемнную
//    public function  __get($name)
//     {
//         echo "'эта переменная закрыта";
//     }
//     //срабатывает, когда хотят записать в закрытую перемнную
//     public function  __set($name, $value)
//     {
//         echo "'нельзя";
//     }  

//     //вызов к несуществующему или закрытому методу
//     public function  __call($name, $arr)
//     {
//             echo "метод $name частный";
//     }

    
//     //вызов к несуществующему или закрытому методу
//     public static function  __callStatic($name, $arr)
//     {
//             echo "метод $name статический";
//     }

//      //метод для получения всех полей из таблицы
//      private function getLine() : array
//      {
//          //если есть кэш, то выдаем данные оттуда
//          if ($this->data){
//              return $this->data;
//          }
//          $pdo = \Connection::getConnection();

//         //отправить запрос в БД
//          $rezult = $pdo->query("SELECT * FROM `" . static::TABLE . "` WHERE `id` =  " . $this->id);
 
//          $rows = $rezult->fetch();
 
//          //сохраняем в кэш
//          $this->data = $rows ;
 
//          return $rows;
 
//      } 

//     //метод для получения одного поля из строки
//     protected function getField(string $field) : mixed
//     {        
//         return $this->getLine()[$field];
//     }

//     public function deleteLine() : bool
//     {

//     }
//     public function updateLine() : bool
//     {
        
//     }


//     //получение всех записей таблицы или только тех, что в списке 
//     public static function getLines() : array
//     {
//         $filterStr = '';

//         $strFields = '';
//         $strValues = '';

//         // if ((isset($_GET['search']) && $_GET['search'] !== '')) {
//         //     $filterStr .= " AND product_name LIKE '%" . $_GET['search'] . "%' OR product_description LIKE '%" . $_GET['search'] . "%' ";
//         // }

//         // foreach ($_GET as $key => $value) {
//         //     if ($key !== 'search' && $key !== 'orderBy' && $key !== 'limit' && $key !== 'field' && $key !== 'price1' && $key !== 'price2') {
//         //         $filterStr .= ' AND ' . $key . ' IN (' . $value . ')';  
//         //     }
//         // }

//         // if ((isset($_GET['price1']) && $_GET['price1'] !== '') && (isset($_GET['price2']) && $_GET['price2'] !== '')) {
//         //     $filterStr .= ' AND price BETWEEN ' . $_GET['price1']  . ' AND ' .  $_GET['price2'];
//         // }

//         // if (isset($_GET['orderBy']) && $_GET['orderBy'] !== '') {
//         //     $filterStr .= ' ORDER BY '  . $_GET['field'] . ' '. $_GET['orderBy'];
//         // }

//         // if (isset($_GET['limit']) && $_GET['limit'] !== '') {
//         //     $filterStr .=  ' LIMIT ' . $_GET['limit'];
//         // }

//         $sqlText = 'SELECT * FROM `' . static::TABLE . '` WHERE 1 ' . $filterStr . ';';

//         $pdo = \Connection::getConnection();
//         $result = $pdo->query($sqlText);
         
//         $tableItem = [];
//         while ($row = $result->fetch())
//         {
//             $tableItem[] = $row;
//         } 

//         return $tableItem;
    
//     }


//     //сделать запись в любую таблицу
//     public static function createLine() : bool
//     {
//         $strFields = '';
//         $strValues = '';

//         foreach ($_POST as $key => $value) {
//                 $strFields .= "`$key`,"; 
//                 $strValues .= "'$value',";

//         }

//         $strFields = trim($strFields, ',');
//         $strValues = trim($strValues, ',');


//         $sqlText = "INSERT INTO ". static::TABLE ."($strFields) VALUES($strValues)";

//         $pdo = \Connection::getConnection();

//         $pdo->query($sqlText);

//         return true;
       
//     }


//     //поиск из любой таблицы
//     public static function search()
//    {
//         $search = $_GET['search'];

//         //заходим в базу 
//         $pdo = \Connection::getConnection();
        
//         $searchString = "";

//         //собираем сроку запросу. Впишем все указанные в классе поля, в которых необх сделать поиск FIELDSEARCH
//         for ($i=0; $i < count(static::FIELDSEARCH); $i++) {
//             $searchString .= static::FIELDSEARCH[$i] . " LIKE '%$search%' OR "; 
//         }

//         //удаляем последние лишние символы
//         $searchString = trim($searchString, 'OR ');


//         $sqlText = "SELECT * FROM `" . static::TABLE ."` WHERE " . $searchString .";";

//         //запишем резальтата запроса в переменную $result
//         $result = $pdo->query($sqlText);
         
//         $tableItem = [];
//         while ($row = $result->fetch())
//         {
//             $tableItem[] = $row;
//         } 

//         return $tableItem;
//     }
// }