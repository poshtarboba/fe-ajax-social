<?php

	$mysqli = new mysqli("localhost", "fe_ajax", "fe_ajax", "fe_ajax");
	if ($mysqli->connect_errno) {
		echo "Error connection to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	$img = $_POST['img'];
	$text = $_POST['text'];
	$likes = 0;
	$date = date('Y.m.d H:m:s');

	if ((!$img)||(!$text)) {
		echo 'Error! URL or message are empty!';
	} else {
		$sql = "INSERT INTO posts (date,text,img,likes)
VALUES ('".$date."','".$text."','".$img."','".$likes."')";

		if ($mysqli->query($sql)) {
			echo 'Пост добавлен успешно';
		} else {
			echo "Error add Record: (" . $mysqli->errno . ") " . $mysqli->error;
		}

	}




