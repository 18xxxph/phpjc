<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>语法</title>
</head>
<body>

<?php
$x=5; // 全局变量

function myTest()
{
	$y=10; // 局部变量
	echo "<p>测试函数内变量：<p>";
	echo "变量 x 为： $x"; 
	echo "<br>";
	echo "变量 y 为: $y";
}

myText();

echo "<p>测试函数外变量：<p>";
echo "变量 x 为： $x";
echo "<br>";
echo "变量 y 为: $y";  
?>


</body>
</html>