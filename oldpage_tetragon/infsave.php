<html>
<body>

<?php 
    echo $_POST["email"]; 
    
    // $myFile2 = "maillist.txt";
    // $myFileLink2 = fopen($myFile2, 'w+') or die("Can't open file.");
    // $myFileContents = fread($fh, 21);    
    // $newContents = $_POST["email"];

    // $myFileContents ." , ".$newContents

    // fwrite($myFileLink2, );
    // fclose($myFileLink2);

    $txt = $_POST["email"];

    if(strlen($txt) > 3 && strpos($txt, '@') !== false){
        $myfile = file_put_contents('maillist.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
    }

    header('Location: index.php');     
?>

</body>
</html>