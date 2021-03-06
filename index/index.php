<?

require_once 'reg.php'; 

$register = new Registration;


if(isset($_POST['register'])) {
    $login   = ($_POST['login']);
    $password = ($_POST['password']);
    $register->userRegister($login, $password);
}
if (isset($_POST['authorization'])) {
    $login   = ($_POST['login2']);
    $password = ($_POST['password2']);
    $register->userLogin($login, $password);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/main.css">
</head>

<body>
<div>
    <?
    if($_COOKIE['user'] == ''):?>
        <h2>Регистрация</h2>
        <form action="#" method="post">
            <label for="login">Логин</label>
            <input id="login" type="text" name='login' placeholder="введите логин">
            <label for="login">Пароль</label>
            <input id="name" type="password" name='password' placeholder="введите пароль">
            <button type="submit" name = "register">Зарегестрировать</button>
        </form>
        <h2>Авторизация</h2>
        <form action="#" method="post">
            <label for="login">Логин</label>
            <input id="login" type="text" name='login' placeholder="введите логин">
            <label for="password">Пароль</label>
            <input id="password" type="password" name='password' placeholder="введите пароль">
            <button type="submit" name="authorization">Войти</button>
        </form>
        <?else:?>
            <p>Приветствую тебя, <?=$_COOKIE['user']?></p> 
        <?endif;?>
    </div>
    <div class="bg-wrap">
        <div class="container">
            <? include 'components/header.php'?>
            <main class="main">
                <section class="main__section main__section--left">
                    <div class="main__section-img">
                        <img src="../img/photo.jpeg" alt="">
                    </div>
                    <div class="main__section-about">
                        Какая то информация...
                    </div>
                </section>
                <section class="main__section main__section--right">
                    <div class="main__section-top">
                        <h2>Всем привет, меня зовут Вячеслав <span>начинающий fullstack разработчик</span></h2>
                    </div>
                    <div class="main__section-bot">
                        <article class="main__section-article main__section-article-1">
                            <h3>Информация о себе</h3>
                            <div class="main__section-accordeon" id="js-accordeon">
                                <div class="main__section-title js-btn">
                                    <p>Технологии</p>
                                    <span href="#"><img src="../img/arrow.svg" alt=""></span>
                                </div>
                                <ul id="js-accordeon-content">
                                    <li class="main__section-item"><img src="../img/js.svg" alt=""> JavaScript</li>
                                    <li class="main__section-item"><img src="../img/vue.svg" alt=""> Vue.js</li>
                                    <li class="main__section-item"><img src="../img/node.svg" alt="">Node.js</li>
                                    <li class="main__section-item"><img src="../img/php.svg" alt="">PHP - в
                                        процессе...</li>
                                </ul>
                            </div>
                            <?
                            $aboutStr = "Кроме программирования люблю тягать железки в спортзале) Был опыт тренерства нескольких
                                человек. Так же раньше вел свой канал в телеграме на автомобильную тематику. Раньше
                                работал руководителем точки 'SUBWAY'. С 2020 года стал изучать веб, затянуло";

                            $firstphrase = explode('.',$aboutStr);
                            foreach ($firstphrase as $key => $phrase) if ($firstphrase[0] === $phrase )
                            echo "<p style='color: rgb(247, 169, 53)'>{$phrase}.</p>"; else {
                                echo "<p>{$phrase}.</p>";
                            };

//                            $pattern = '/[^ a-zа-яё\d]/ui'; Второй способ - проеобразовать строку и пройтись циклом
//                            $aboutStrClear = preg_replace($pattern, ' ', $aboutStr );
//                            $aboutTrim = str_replace(' ', '', $aboutStrClear);

                            $countText = preg_replace ("/[аеуоиоюяАЕОУЮЫЯ]/", "", $aboutStr);
                            $count = strlen($aboutStr)-strlen($countText);
                            echo("Количество гласных в этом блоке: $count");
                            ?>

                        </article>
                        <article class="main__section-article main__section-article-2">
                            <h3>Отзыв о уроках</h3>
                            <p> Уроки нравятся, нагрузка умеренная и по времени отлично. Хоть самостоятельно изучаю
                                немного php, жду блок по этому языку :)
                            </p>
                        </article>
                    </div>
                </section>
            </main>
            <section class="main__section main__section-close">
                <?php  date_default_timezone_set("Etc/GMT-5"); echo 'Текущее время: '.(date('H:i').'.&nbsp');if(strtotime(date('H:i')) > strtotime('23:00') && strtotime('08:00')):?>
                <div class="block">
                    Сейчас ночь :)
                </div>
                <?php endif;?>
                <?php
                $arr= array();
                $arr = 'apple';
                for ($i = 0; $i < 5; $i++){
                    $randNumver = rand(1, 10);
                    $arr[$i] = "$randNumver";
                }
                $reversed = array_reverse((array)$arr, true);
                print_r($arr);
                print_r($reversed);

                ?>
                
            </section>
        </div>
    </div>
    <script src="../scripts/script.js"></script>
</body>

</html>