Основные цвета:
Фон: #F7CE9D;
Цвет кнопки: rgb(255, 188, 45);
Хороший сайт о достопримечательностях:
https://www.tourister.ru/world/europe/russia/region/dagestan/placeofinterest


//получение и использование данных по одной карточке
$data = Place::getLinesApiId($_GET['id']);

// первый вариант обращения к элементам через нулевой элемент
echo "Получили данные по карточке" . $data[0]['id'];

// второй вариант, перевести нулевой вариант в объект и обращаться ->
$obj = (object)$data[0];
echo "Получили данные по карточке" . $obj->id;

    //ВНИМАНИЕ!!! если в названии поля дефис, заключаем его в {' '}
    echo $obj->{'short-desc'};



//запись в базу json 
["el1", "el2", "el3"];
//использование в коде
$imgCarousel = json_decode($data[0]['img-carousel'], true);
echo "Получили слайд 4" . $imgCarousel[3];