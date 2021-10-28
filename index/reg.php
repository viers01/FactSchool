<?php

//-------ПОДКЛЮЧАЕМ КЛАСС КОННЕКТА К БД-----//

require_once 'connection.php';

class Registration{

    public function __construct(){

        //---------------СОЗДАНИЕ ПОДКЛЮЧЕНИЯ----------------------------//
        $this-> connect = new Connect();
        $this-> connect = $this->connect->dbConnect();
    
    }
    
    //---------------МЕТОД ОЧИСТКИ ДАННЫХ ОТ ЛИШНИХ ПРОБЕЛОВ-------------//
    public function clearData($data){
        return filter_var(trim($data), FILTER_SANITIZE_STRING);
    }
    
    //---------------МЕТОД ШИФРОВАНИЯ ДАННЫХ В ФОРМАТ MD5----------------//
    public function encryptionData($password){
        return md5($password.'dfhtrthrr');
    }
    

    //--------------ВНЕСЕНИЕ ДАННЫХ В БАЗУ ------------------------------//
    public function userRegister($login, $password){
        $this->connect->query("INSERT INTO `users` (`login`, `password`)
        VALUES('$login','$password')");
    }

    //--------------ПРОВЕРКА ДАННЫХ В БАЗЕ ------------------------------//
    public function userLogin($login, $password){
        $zapros = mysqli_query($this->connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
        $resultArr = $zapros->fetch_assoc();
        print_r($resultArr);

        if($resultArr !== 0){
            setcookie('user', $login, time() + 3600);
        }
    }
}

?>