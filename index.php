<?php
$method = $_SERVER['REQUEST_METHOD'];

if($method == 'POST'){
	echo "hello world";	
}
else{
	header("Location: ./form.php");
}
?>