<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <button name="correct">correct</button>
    <button name="higher">higher</button>
    <button name="lower">lower</button>
    <button name="reset">reset</button>
</form>
</body>
</html>
<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "GET") {
    $low = isset($_SESSION["low"])? $_SESSION["low"] : 1;
    $high = isset($_SESSION["high"])? $_SESSION["high"] : 100;
    $mid = (int)(($low + $high)/2);
    echo $mid;
    if(isset($_REQUEST["correct"])) {
        echo "Bạn đã đoán đúng";
    }

    if(isset($_REQUEST['higher'])) {
        $low = $mid + 1;
        $_SESSION["low"] = $low;
    }
    if(isset($_REQUEST['lower'])) {
        $high = $mid - 1;
        $_SESSION["high"] = $high;
    }

    if(isset($_REQUEST['reset'])) {
        session_destroy();
    }
}



?>
