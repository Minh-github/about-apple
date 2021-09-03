<?php 
	$conn = mysqli_connect("localhost","root","","apple");
	mysqli_set_charset($conn,"utf8");

	function execute($sql) {
	//create connection toi database
	$conn = mysqli_connect("localhost","root","","apple");

	//query
	mysqli_query($conn, $sql);

	//dong connection
	mysqli_close($conn);
}
	
	function executeResult($sql) {
	//create connection toi database
	$conn = mysqli_connect("localhost","root","","apple");

	//query
	$resultset = mysqli_query($conn, $sql);
	$list      = [];
	while ($row = mysqli_fetch_array($resultset, 1)) {
		$list[] = $row;
	}

	//dong connection
	mysqli_close($conn);

	return $list;
}
?>