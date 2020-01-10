<?php

	require 'connection.php';

	$errorReportByDate = "";
	$table2 = "";
	if(isset($_POST['reportBtn']))
	{
		$reportByDate = $_POST['reportByDate'];

		if(empty($reportByDate))
			$errorReportByDate = " * Date Required";

		if(!empty($reportByDate))
		{
			$reportdate = $conn->prepare("SELECT * FROM patient,medical_history WHERE Physician_name = id_medical AND date_of_entry = '$reportByDate'");
			$reportdate->execute();
			$table2 =  "<table>";
			$table2 .= "<tr><td>Name</><td>Doctor</td></tr>";
			while($row3 = $reportdate->fetch())
			{
				$table2 .= "<tr>";
				$table2 .= "<td>";
				$table2 .= $row3['name'];
				$table2 .= "</td>";
				$table2 .= "<td>";
				$table2 .= $row3['name_doctor'];
				$table2 .= "</td>";
				$table2 .= "</tr>";
			}
			$table2 .= "</table>";
		}	
	}