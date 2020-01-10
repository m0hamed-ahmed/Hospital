<?php

	require 'connection.php';

	$errorId = $errorName = $errorDateEntry = $errorPhysicianName = $errorNameDisease = "";
	if(isset($_POST['add_patient']))
	{
		$id			 	= $_POST['id'];
		$name 			= $_POST['name'];
		$gender 		= $_POST['gender'];
		$date_entry 	= $_POST['date_entry'];
		$name_disease 	= $_POST['name_disease'];
		if(isset($_POST['physician_name']))
		{
			$physician_name = (int)$_POST['physician_name'];
		}

		if(empty($id))
			$errorId = " * ID Required";
		if(empty($name))
			$errorName = " * Name Required";
		if(empty($date_entry))
			$errorDateEntry = " * Date Required";
		if(empty($name_disease) || $name_disease == 'empty')
			$errorNameDisease = " * Disease Required";
		if(isset($_POST['physician_name']))
		{
		if($physician_name == 'empty')
			$errorPhysicianName = " * Physician Name Required<br>";
		}


		if(!empty($id) && !empty($name) && !empty($date_entry) && !empty($physician_name) && $physician_name != 'empty' && !empty($name_disease) && $name_disease != 'empty')
		{
			$add_patient = $conn->prepare("INSERT INTO patient VALUES(?,?,?,?,?)");
			$add_patient->bindParam(1,$id);
			$add_patient->bindParam(2,$name);
			$add_patient->bindParam(3,$gender);
			$add_patient->bindParam(4,$date_entry);
			$add_patient->bindParam(5,$physician_name);
			$add_patient->execute();

		}

	}