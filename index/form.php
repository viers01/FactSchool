<?php
$login_correct = 'slava';
$password_correct = '12345';
$login = '';
$password = '';
if(count($_POST)>0){
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    if ($login == ''){
        echo 'Заполните логин';
    }
    if ($password == ''){
        echo 'Заполните пароль';
    }
    if ($login !== '' && $password !== ''){
        echo 'Вы ввели все данные';
    }
} else {
    echo 'Заполните все данные';
}
//print_r($_POST);
$mailTo = "test@gmail.com"; // адрес отправителя
$from = "test@files.com"; // от кого письмо (от чьего имени)
$subject = "Test file"; // тема
$message = $_POST['comment']; // содержимое письма
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <p>
        <select name="login" id="">
            <option>Выберите Имя</option>
            <option value="slava">slava</option>
            <option value="sasha">sasha</option>
            <option value="misha">misha</option>
        </select>
    </p>
    <p>
        Password <input type="text" name="password">
    </p>
    <button type="submit">Send</button>
</form>
<? if($password == $password_correct && $login == $login_correct):?>
    <div>
        <p>Вы получили доступ к данным и можете отправить комментарий</p>
        <form method="post" action="<? mail($mailTo, $subject, $message);?>">
            <textarea name="comment" id="" cols="30" rows="10"></textarea>
            <button type="submit">Отправить</button>
        </form>
    </div>
<?else:?>
    <div>
        <p>Неверные данные</p>
    </div>
<?endif;?>
</body>
</html>