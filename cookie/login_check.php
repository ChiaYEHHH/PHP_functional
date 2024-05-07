<?php
$acc=$_POST['id_login'];
$pw=$_POST['pw_login'];
date_default_timezone_set("Asia/Taipei");

if($acc=='asdf' && $pw=='1234'){

    // 如果正確,設定cookie 用time()控制幾秒刪除cookie
    setcookie('login', $acc, time()+10);


    header('location:login_success.php?acc='.$acc);
    
}else{
// 如果其中一個錯誤,設定cookie 用time()控制幾秒刪除cookie
    setcookie('error', '帳號或密碼錯誤', time()+10);
    header("location:login_cookie.php");

}




?>