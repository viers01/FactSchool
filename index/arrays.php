<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
<div class="bg-wrap">
    <div class="container">
        <? include 'components/header.php'?>
        <section class="arrays">
            <h1>Работа с массивами</h1>
            <div class="arrays__item">
                <h2>Задание 1</h2>
                <?
                //функция вывода чётных чисел
                function isValue($numbers){
                    $arr1 = array();
                    for($i = 0; $i <= $numbers;$i++){
                        $randNum = rand(0,10);
                        array_push($arr1, $randNum);
                    }
                    foreach ($arr1 as $value){
                        if ($value % 2 == 0){
                            echo "<b>{$value}</b><br>";
                        } else {
                            echo "{$value}<br>";
                        }
                    }
                }
                isValue(10);

                ?>
            </div>
            <div class="arrays__item">
                <h2>Задание 2</h2>
                <?
                $arr2 = array(
                    'Home1' => array('Alice', 'Brok', 'Nina'),
                    'Home2' => array('Nancy', 'Aron', 'Anna'),
                    'Home3' => array('Lanny', 'Angela', 'Karma')
                );
                //функция вывода всех имен на любую букву во втором аргументе.
                function searchWords($array, $letter){
                    foreach ($array as $value){
                        if (is_array($value)){
                            foreach ($value as $item){
                                if ($item[0] == $letter){
                                    echo "{$item}<br>";
                                }
                            }
                        }
                    };
                }
                searchWords($arr2, 'A');
                ?>
            </div>
            <div class="arrays__item">
                <h2>Задание 3</h2>
                <?
                $arr3 = array(
                    'Первый набор' => array(1, 3, 2,3,5,6,7),
                    'Второй набор' => array(7, 5, 1),
                    'Третий набор' => array(1, 6, 9,5)
                );
                //функция подсчета ключей и значений в массиве
                function countKey($array){
                    echo "Всего элементов в массиве ".count($array)."<br>";
                    foreach ($array as $key => $value){
                        echo "Количество элементов в ".$key." - ".count($value)."<br>";
                    }
                }
                countKey($arr3);
                ?>
            </div>



            <div class="arrays__item">
                <h2>Задание 4</h2>
                <?
                //функция пордсчета дней между датами
                function countDays($d1, $d2)
                {
                    $date1 = strtotime($d1);
                    $date2 = strtotime($d2);
                    $seconds = abs($date1 - $date2);
                    return floor($seconds / 86400);
                }

                echo 'Дней с моего дня рождения'.' '.countDays('1998-03-15 15:34:12', '2021-10-17 18:21:32');
                ?>
            </div>

            <div class="arrays__item">
                <h2>Задание 5 (расширение .png)</h2>
                <?
                function searchFormat($string, $needle){
                    if (strpos($string, $needle) !== false ){
                        echo ("Строка {$string} содержит {$needle}");
                    } else{
                        echo ("Строка {$string} не содержит {$needle}");
                    }
                }
                searchFormat('picture.png', '.png');
                echo "<br>";
                searchFormat('picture.img', '.png');


                ?>
            </div>
            <?
            $arr4 = array(
                    'Ivanovs' => array('Ivan','Kate', 'Tom' ),
                    'Petrovs' => array('Bob','Ann', 'Tanya' ),
                    'Smith' => array('Kate','Same'),
            );
            ?>
            <div class="arrays__item">
                <h2>Задание 6</h2>
                <?

                ?>
            </div>
        </section>
    </div>
</div>
</body>
</html>