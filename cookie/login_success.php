<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Success</title>
</head>
<body>
    <h1>登入成功</h1>
    <?date_default_timezone_set("Asia/Taipei");?>

    <h2><?=$_GET['acc'];?>歡迎光臨</h2>
    <a href="login_cookie.php">回登入頁</a>
    <p>
        <a href="login_cookie.php">回登入頁-已登入成功</a>
        <br>
        <a href="logout.php">登出</a>
    </p>

</body>
</html>