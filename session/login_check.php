<?php
session_start();
$acc=$_POST['id_login'];
$pw=$_POST['pw_login'];

if($acc=='asdf' && $pw=='1234'){
    // 如果正確
    $_SESSION['login']=$acc;
    header('location:login_success.php?acc='.$acc);
}else{
    // 如果
    $_SESSION['error']='帳號或密碼錯誤';
    header("location:login_fail.php?acc=$acc");

}