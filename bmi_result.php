<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI結果</title>
</head>
<body>
    <h1>BMI計算結果</h1>
    <?php
    if(!empty($_POST)){
        if(empty($_POST['height'])){
            echo "請輸入正確的身高";
        }else{
            echo "身高:".$_POST['height']."<br>";
            $height=$_POST['height'];
        }
        if(empty($_POST['weight'])){
            echo "請輸入正確體重";
        }else{
            echo "體重:".$_POST['weight']."<br>";
            $weight=$_POST['weight'];
        }
    }else{
        if(empty($_GET['height'])){
            echo "請輸入正確的身高";
        }else{
            echo "身高:".$_GET['height']."<br>";
            $height=$_GET['height'];
        }
        if(empty($_GET['weight'])){
            echo "請輸入正確體重";
        }else{
            echo "體重:".$_GET['weight']."<br>";
            $weight=$_GET['weight'];
        }
    }
    
    if(!empty($height) && !empty($weight)){
        $bmi=$weight/(($height/100)*($height/100));
        echo "你BMI值:".round($bmi,2);
    }else{
        echo "請輸入正確的身高體重";
    }

    ?>
</body>
</html>