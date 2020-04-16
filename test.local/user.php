<?php
session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['age'] = $_POST['age'];

setcookie('name', $_POST['name'], time() + 3600);
setcookie('age', $_POST['age'], time() + 3600);
if($_POST['name'] == 'Vlad'){
    $_SESSION['admin'] = true;
};
header('location: index.php');
end();
?>