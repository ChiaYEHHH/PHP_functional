<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入頁面-Session</title>
    <style>
        body{
            background-color: lightblue;

        }
        .container{
            width: 500px;
            height:500px;
            background-color: skyblue;
            margin:auto;
        }
        .box{
            width:60%;
            margin:auto;
            text-align:center;

        }
        h1{
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
    if(isset($_SESSION['login']) && $_SESSION['login']==1){
        
        echo "已登入";

    }else{
    ?>

        <h1>請登入</h1>
        <form action="login_result.php" method="post">
        <div class="box">
            <label for="ID">帳號:</label>
            <input type="text" name="id_login" id="id_login">

        </div>
        <div class="box">
            <label for="password">密碼:</label>
            <input type="text" name="pw_login" id="pw_login">

        </div>
        <div class="box">
            <input type="submit" value="登入">
            <input type="reset" value="清除">

        </div>
    



    </form>
    <?php
    }
    ?>


    </div>
</body>
</html>