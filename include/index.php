<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的英雄學院</title>
    <style>
        body {
            width: 1000px;
            margin: auto;
            padding: 10px;
            height: 100vh;
            position: relative;
        }

        header {
            height: 150px;
            width: 100%;
            box-shadow: 0 0 10px darkgray;
            font-size: 36px;
            font-weight: bolder;
            text-align: center;
            line-height: 150px;
        }

        nav {
            margin: 5px auto;
        }

        nav a {
            display: inline-block;
            padding: 5px 12px;
            text-align: center;
            font-size: 14px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            padding: 20px;
            font-size: 32px;
        }

        footer {
            height: 35px;
            width: 80%;
            background-color: blue;
            color: white;
            text-align: center;
            position: fixed;
            bottom: 0;
        }

        .active {
            background-color: skyblue;
        }
    </style>
</head>

<body>
    <!-- basename(__FILE__)取得當下檔名XXX.php,再用explode以"."為界線炸開組成陣列['XXX' , 'php'] 
    只取[0]就是['XXX']-->
    <?php // $file = explode(".", basename(__FILE__))[0]; 
    ?>
    <!-- 判斷PHP檔名是否存在，存在$page='當下頁面'，不存在$page='main' -->
    <?php $page = isset($_GET['page']) ? $_GET['page'] : 'main'; ?>
    <!-- include跟 include_once差別在include_once同樣的檔案只會執行一次 -->
    <?php include_once "./layout/header.php"; ?>
    <?php include_once "./layout/nav.php"; ?>
    <marquee>這是一個跑馬燈</marquee>



    <?php
    // 精簡版
    // $file
    $file = "./pages/{$page}.php";
    // 用file_exist()判斷檔案是否存在
    if (file_exists($file)) {

        include $file;
    } else {
        include "./pages/main.php";
    }


    // 第一版
    // switch ($page){
    //     case 'index':
    //         include "./pages/main.php";
    //         break;
    //     case 'news':
    //         include "./pages/news.php";
    //         break;
    //     case 'products':
    //         include "./pages/products.php";
    //         break;
    //     case 'contact':
    //         include "./pages/contact.php";
    //         break;
    //     default :
    //     include "./pages/main.php";
    // } 
    ?>
    <footer>頁腳</footer>
</body>

</html>