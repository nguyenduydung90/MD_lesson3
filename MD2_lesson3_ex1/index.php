<?php
include ('QuadraticEquation.php');
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
<form action="" method="post">
    <input type="text" name="number" placeholder="nhap a">
    <input type="text" name="_number" placeholder="nhap b">
    <input type="text" name="__number" placeholder="nhap c">
    <button type="submit">Result</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $a=$_REQUEST["number"];
    $b=$_REQUEST["_number"];
    $c=$_REQUEST["__number"];

    $quad=new QuadraticEquation($a,$b,$c);
if($quad->getDiscrimianant()==0){
    echo "Phương trình có một nghiệm là: ".$quad->getRoot1();
}else if($quad->getDiscrimianant()>0){
    echo "Phương trình có 2 nghiệm: ".$quad->getRoot1()." và ".$quad->getRoot2();
}else{
    echo "The equation has not roots";
}
}
?>
</body>
</html>
