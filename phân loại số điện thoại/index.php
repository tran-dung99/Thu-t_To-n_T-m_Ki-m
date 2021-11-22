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
    <textarea cols="50" rows="20" name="sdt">

    </textarea>
    <button type="submit">submit</button>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "GET") {
    $viettel = [];
    $mobifone = [];
    $vinaphone = [];
    $numberPhone = $_REQUEST["sdt"];
    $arr = explode(",",$numberPhone);
    for($i = 0; $i < count($arr); $i++) {
        $number = substr($arr[$i],0,2);
       if($number == "03") {
            array_push($viettel,$arr[$i]);
       }else if($number == "07") {
           array_push($mobifone,$arr[$i]);
       }else if($number == "08") {
           array_push($vinaphone,$arr[$i]);
       }
    }
if(!empty($viettel)) {
    echo "Viettel: ";
    echo"<pre>";
    print_r($viettel)."<br>";
    echo "Mobifone: ";
    echo"<pre>";
    print_r($mobifone)."<br>";
    echo "vinaphone: ";
    echo"<pre>";
    print_r($vinaphone)."<br>";
}

}

?>

