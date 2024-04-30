<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>