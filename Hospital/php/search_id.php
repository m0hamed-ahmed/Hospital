<?php

	require 'connection.php';

	$errorSearchId = "";
	$table = "";
	if(isset($_POST['searchBtn']))
	{
		$search = $_POST['search'];

		if(empty($search))
			$errorSearchId = "<div class='errorSearchId'> * ID Required</div>";
		else
		{
			$search_id = $conn->prepare("SELECT * FROM patient,medical_history WHERE Physician_name = id_medical AND id =?");
			$search_id->execute(array($search));
			$table = "<table>";
			$table .= "<tr><td>ID</td><td>Name</td><td>Gender</td><td>Date Of Entry</td><td>Physician Name</td></tr>";
			while($row1 = $search_id->fetch())
			{
				$table .= "<tr>";
				$table .= "<td>" . $row1['id'] . "</td>";
				$table .= "<td>" . $row1['name'] . "</td>";
				$table .= "<td>" . $row1['gender'] . "</td>";
				$table .= "<td>" . $row1['date_of_entry'] . "</td>";
				$table .= "<td>" . $row1['name_doctor'] . "</td>";
				$table .= "</tr>";
			}
			$table .= "</table>";
		}
	}