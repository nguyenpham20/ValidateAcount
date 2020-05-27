<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $str = $_POST['account'];
    function validateAccount($str)
    {
        $pattern = "/^[_a-z0-9]{6}$/";
        if (preg_match($pattern, $str)) {
            echo ($str."Tai khoan dung");
        } else {
            echo ($str."Tai khoan khong dung");
        }
    }
    validateAccount($str);

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Nhap tai khoan:
    <input type="text" name="account"/>
    <button type="submit">Tim kiem</button>
</form>

</body>
</html>
