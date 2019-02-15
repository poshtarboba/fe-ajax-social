<?php

	$mysqli = new mysqli("localhost", "fe_ajax", "fe_ajax", "fe_ajax");
	if ($mysqli->connect_errno) {
		echo "Error connection to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	if ($_POST['id']) {
		$offset = $_POST['id'];
	} else {
		$offset = 0;
	}

	$sql = "SELECT * FROM posts WHERE id >= " . $offset . " LIMIT 5";

	$res = $mysqli->query($sql);

	if ($res) {
		$data = array();
		while ($row = $res->fetch_assoc()) {
			$data[] = $row;
		}
		echo json_encode($data);
	} else {
		echo "Error add Line: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	



