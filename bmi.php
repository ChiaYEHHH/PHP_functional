<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI表單</title>
    <style>
        body{
            background-color: lightgray;
        }
        .container{
            width:50%;
            height:80vh;
            background-color: lightblue;
            margin:auto;
            padding-left:50px;
            /* padding-top:5px; */
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>計算BMI</h1>
    <h3>POST</h3>
    <form action="bmi_result.php" method='post'>
    <div>
        <label for="height">身高:</label>
        <input type="number" name="height" id="height">
    </div>
    <div>
        <label for="weight">體重:</label>
        <input type="number" name="weight" id="weight">
    </div>
    <div>
        <input type="submit" value="開始計算">
        <input type="reset" value="清除重寫">
    </div>
</form>

    <h3>GET</h3>

    <form action="bmi_result.php" method='get'>
    <div>
        <label for="height">身高:</label>
        <input type="number" name="height" id="height">
    </div>
    <div>
        <label for="weight">體重:</label>
        <input type="number" name="weight" id="weight">
    </div>
    <div>
        <input type="submit" value="開始計算">
        <input type="reset" value="清除重寫">
    </div>

    </form>
    </div>
</body>
</html>