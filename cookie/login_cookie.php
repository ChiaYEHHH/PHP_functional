<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入頁面</title>
    <style>
        body {
            background-color: lightblue;

        }

        .container {
            width: 500px;
            height: 500px;
            background-color: skyblue;
            margin: auto;
        }

        .box {
            width: 60%;
            margin: auto;
            text-align: center;

        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>請登入</h1>
        <?php
        // 設定時區
        date_default_timezone_set("Asia/Taipei");
        if (isset($_COOKIE['login']) && ($_COOKIE['login'] == 'asdf')) {

            echo "已登入";
            echo "<br>";
            echo "<a href='logout.php'>登出</a>";
        } else {
            if (isset($_COOKIE['error'])){
                echo "<span style='color:red'>{$_COOKIE['error']}</span>";
            }
        ?>    
            <form action="login_check.php" method="post">
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