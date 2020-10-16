<?php include("Rectangle.php");?>
<?php
$width=10;
$height=20;
$rec=new Rectangle($width,$height);

echo $rec->getArea();
echo "<br>";
echo $rec->getPerimeter();
echo "<br>";
echo ("Your Rectangle:"."\n".$rec->display());
