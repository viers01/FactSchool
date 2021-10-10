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
            <?
            $arr1 = array();

            for($i = 0; $i <= 5;$i++){
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
            ?>

            <?
            $arr2 = array(
                    'Home1' => array('Alice', 'Brok', 'Nina'),
                    'Home2' => array('Nancy', 'Aron', 'Anna'),
                    'Home3' => array('Lanny', 'Angela', 'Karma')
                    );
            foreach ($arr2 as $value){
                if (is_array($value)){
                    foreach ($value as $item){
                        if ($item[0] == 'A'){
                            echo "{$item}<br>";
                        }
                    }
                }
            };
            ?>

            <?
            $arr3 = array(
                'Первый набор' => array(1, 3, 2,3,5,6,7),
                'Второй набор' => array(7, 5, 1),
                'Третий набор' => array(1, 6, 9,5)
            );
            echo "Всего элементов в массиве ".count($arr3)."<br>";
            foreach ($arr3 as $key => $value){
                echo "Количество элементов в ".$key." - ".count($value)."<br>";
            }
            ?>
            <?
            $arr4 = array(
                    'Ivanovs' => array('Ivan','Kate', 'Tom' ),
                    'Petrovs' => array('Bob','Ann', 'Tanya' ),
                    'Smith' => array('Kate','Same'),
            );


            ?>
        </section>
    </div>
</div>
</body>
</html>