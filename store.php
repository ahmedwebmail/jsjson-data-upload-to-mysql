<?php
	require_once "config.php";

	$conn = new mysqli(HOST, USER, PASS, DB );

	if( $_SERVER["REQUEST_METHOD"] == "POST" && isset( $_FILES['jsonFile'] ) ){
		$jsonFile = $_FILES['jsonFile']['tmp_name'];

		$file_content = file_get_contents( $jsonFile );
		$file_content = json_decode( $file_content, true );
		
		$stmt = $conn->prepare("INSERT INTO users (id, first_name, last_name, email) VALUES (?, ?, ?, ?)");

		foreach( $file_content as $data ){
			$stmt->bind_param("isss", $data['id'], $data['first_name'], $data['last_name'], $data['email']);
        	$stmt->execute();

		}
		$stmt->close();
		echo "New record created successfully";
	}