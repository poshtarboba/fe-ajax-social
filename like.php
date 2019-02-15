<?php

	$mysqli = new mysqli("localhost", "fe_ajax", "fe_ajax", "fe_ajax");
	if ($mysqli->connect_errno) {
		echo "Error connection to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	$id = $_POST['id'];
	if ($_POST['like']) {
		$like = $_POST['like'];
	} else {
		$like = 0;
	}

	$sql = "SELECT * FROM posts WHERE id = " . $id;

	$res = $mysqli->query($sql);

	if ($res) {
		$row = $res->fetch_assoc();
		$n =  $row['likes'] + $like;
		$sql = "UPDATE posts SET likes = " . $n ." WHERE id = " . $id;
		$res = $mysqli->query($sql);
		echo $n;
	} else {
		echo "Error add Line: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	



