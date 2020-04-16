<?php

if ($_POST['text'] != ""){
    $text = $_POST['text'] . "\n";
    $file = fopen('text/data.txt', 'a');
fwrite($file, $text);
fclose($file);

};
header('Location: index.php');
exit();
?>