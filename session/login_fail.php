<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Fail</title>
    <style>
        p{
            color:red;
        }
    </style>
</head>
<body>
    <h1>登入失敗</h1>

    <p><?=$_GET['acc'];?>帳號或密碼錯誤</p>

    <h2>請確認帳號密碼，並重新輸入</h2>
    
    
    <a href="login.php">回登入頁</a>
</body>
</html>