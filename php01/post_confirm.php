<?php
header('Content-Type: text/html; charset=UTF-8');
echo '文字化けしない';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
//文字作成
$str = date("Y-m-d H:i:s");
//File書き込み
$file = fopen("./data.txt","a"); // ファイル読み込み

fwrite($file, $name.','.$mail.','.$str."\r\n");
fclose($file);
echo '';

?>