<?php
$acc=$_POST['id_login'];
$pw=$_POST['pw_login'];

if($acc=='asdf' && $pw=='1234'){
    header('location:login_success.php?acc='.$acc);
}else{
    header("location:login_fail.php?acc=$acc");

}