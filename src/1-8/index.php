

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-8</title>
</head>
<body>
    <form action="result.php" method="post">
    お名前：<input type="text" name="my_name" />
    <br>
    ご希望商品 :
    <input type="radio" name="choices" value="Aセット" />Aセット
    <input type="radio" name="choices" value="Bセット" />Bセット
    <input type="radio" name="choices" value="Cセット" />Cセット
    <br>
    注文数：
    <input type="number" name="number" >
    <input type="submit" value="送信" />
  </form>
</body>
</html>