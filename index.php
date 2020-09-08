<?php
    require "includes/config.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
    body {
        font-family:微軟正黑體;
    }
</style>
<title>何敏煌0908</title>
</head>
<body>
<h2>何敏煌0908 PHP練習記錄</h2>
<hr>
<?php
    //設定查詢語言，要找的是homepage那個記錄值(name, value)
    $sql = "SELECT * from counter WHERE name='homepage'";
    $result = $conn->query($sql); //實際執行查詢
    if ($result->num_rows > 0) {  //檢查是否找得到這筆記錄
        $row = $result->fetch_assoc();  //如果有的話就取出
        $value = $row["value"];   //把value欄位的內容放到$value變數中
    } else {
        $value = 0;  //如果找不到，就把$value設定為0
    }
    echo "參觀人次：" . $value . "人。<br>"; //把$value的結果輸出到首頁
    $value ++;
    $sql = "UPDATE counter SET value='$value' WHERE name='homepage'";
    $conn->query($sql);
    $conn->close();
?>

<?php include "includes/menu.php"; ?>
<hr>
<?php include "includes/footer.php"; ?>
</body>
</html>