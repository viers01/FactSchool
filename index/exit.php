<?
setcookie('user','123', time() - 3600, "/");
header('Location: /');
?>