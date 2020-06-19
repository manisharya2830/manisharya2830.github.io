<?php
$var=mysqli_connect('localhost','root','',maharaja);
$query= "insert into signup values('".$_POST['name']."','".$_POST['city']."','".$_POST['name']."','".$_POST['name']."','".$_POST['name']."','".$_POST['name']."',)";
echo $query;
$result=mysqli_($var,$query);
echo ("<script LANGUAGE='JavaScript'>
	window.alert('you have sucessfully register ');
	window .location.herf= 'maharaja home page.htm';
	</script>");
?>