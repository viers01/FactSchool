<?


$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);


$password = md5($password."asdada");
$host = "127.0.0.1";
$username = "root";
$pass = "";
$connect = mysqli_connect($host, $username, $pass, "users");
$result = $connect->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
$zapros = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
$arr__result = mysqli_fetch_all($zapros);
if(count($arr__result) == 0)  {
    echo 'Пользователь не найден!';
} 
setcookie('user',$login, time() + 3600, "/" );
$connect->close();
header('Location: index.php');

?>