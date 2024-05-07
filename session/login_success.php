<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Success</title>
</head>
<body>
    <h1>登入成功</h1>

    <h2><?=$_GET['acc'];?>歡迎光臨</h2>
    <a href="login.php">回登入頁</a>
    <p>
        <a href="login.php?login=1">回登入頁-已登入成功</a>
    </p>

</body>
</html>