<?php
//session_start() ;
//setcookie ("login", "", time()-14800);
//setcookie ("password", "", time()-14800);
$_SESSION['auth'] = false;
//session_destroy();
//header ("Location: login.php?logout=1");
//exit;
?><h3>Вы успешно вышли из Логина</h3>
<a href="index.php">Вернуться на главную страницу</a>
<?php
?>
