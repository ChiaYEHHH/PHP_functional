<?php
// 必須先宣告session開始
session_start();
$acc=$_POST['id_login'];
$pw=$_POST['pw_login'];

if($acc=='asdf' && $pw=='1234'){
    // 如果正確
    $_SESSION['id_login']=$acc;
    header('location:login_success.php');
}else{
    // 如果有一不正確
    $_SESSION['error']='帳號或密碼錯誤';
    header("location:login_session.php");

}
?>