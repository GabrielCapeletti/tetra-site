<html>
<body>

<?php 
    echo $_POST["email"]; 
    $txt = $_POST["email"];

    if(strlen($txt) > 3 && strpos($txt, '@') !== false){
        $myfile = file_put_contents('maillist.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
    }

    header('Location: index.php?es=1');       
?>

</body>
</html>