<?php
function getMyDbConn() {
	$conn = null;
	$dsn = "mysql:host=db;port=3306;dbname=test;charset=utf8";
	try {
		$conn = new PDO($dsn, "test", "test");
		$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo $e->getMessage();
	}

	return $conn;
}

$conn = getMyDbConn();

echo $conn;

//echo phpinfo();
?>
