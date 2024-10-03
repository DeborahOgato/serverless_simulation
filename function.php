<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $_POST['name'];
	echo "Hello," . htmlspecialchars($name) . "!Your data was processed.";
}
else{
	echo "send a POST request to trigger this function.";
}
?>

