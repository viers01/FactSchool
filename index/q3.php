<?php
session_start(); // Обязательно запускаем (возобновляем) сессию! Без этого работать не будет!
$_SESSION['answers'] = $_GET;
print_r($_GET) ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get">
    <p>Имя главного героя JOJO REFERENCE?</p>
    <input id="var1" type="radio" name="question1" value="1"><label for="var1">Джонатан Джостар</label><br>
    <input id="var2" type="radio" name="question1" value="0"><label for="var2">Джотаро Куджо</label><br>
    <input id="var3" type="radio" name="question1" value="0"><label for="var3">Джорно Джованна</label><br>

    <p>Сколько лет главному герою JOJO REFERENCE?</p>
    <input id="var4" type="radio" name="question2" value="0"><label for="var4">31</label><br>
    <input id="var5" type="radio" name="question2" value="0"><label for="var5">22</label><br>
    <input id="var6" type="radio" name="question2" value="1"><label for="var6">20</label><br>

    <p>Какого цвета волосы главноого героя JOJO REFERENCE?</p>
    <input id="var7" type="radio" name="question3" value="0"><label for="var7">Красные</label><br>
    <input id="var8" type="radio" name="question3" value="1"><label for="var8">Синие</label><br>
    <input id="var9" type="radio" name="question3" value="0"><label for="var9">Черные</label><br>
    <input type="submit">
    <a href="q1.php">Узнать ответы</a>
</form>
</body>
</html>