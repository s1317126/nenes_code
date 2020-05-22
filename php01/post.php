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


<html>
<head>
<meta charset="utf-8">
<meta http-equiv="content-type" charset="utf-8">
<title>POST練習</title>
</head>
<body>
<form action="post_confirm.php" method="post">
 お名前: <input type="text" name="name">
 EMAIL: <input type="text" name="mail">
 <input type="submit" value="送信">
</form>
</body>
</html>