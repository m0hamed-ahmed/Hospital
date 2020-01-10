<?php

	require 'connection.php';

	$errorDisplay = "";
	if(isset($_POST['displayBtn']))
	{
		$display = $_POST['display'];

		if(empty($display) || $display =='empty')
			$errorDisplay = " * Disease Required";

		if(!empty($display) && $display != "empty")
		{
			$display = $conn->prepare("SELECT * 
									   FROM patient,medical_history 
									   WHERE physician_name = id_medical 
									   AND name_of_the_disease = '$display'"
									);
			// $display(1,$display);
			$display->execute();
			$row2 = $display->fetch();
			echo "<div class='display_medical_history'>";
			echo "<div>" . $row2['name_of_the_disease'] . "</div>";
			echo "<div>* This disease appeared in history <span>" . $row2['date_disease'] . "</span></div>";
			echo "<div>* Number Of Prescribed Medicines Is <span>" . $row2['number_of_prescribed_medicines'] . "</span></div>";
			echo "<div>* Doctors currently available to treat this disease are<br><span> ";
			if($row2['name_of_the_disease'] == 'cancer') echo "Cancer-Name1 , Cancer-Name2 , Cancer-Name3";
			else if($row2['name_of_the_disease'] == 'Inflammation') echo "Inflammation-Name1 , Inflammation-Name2 , Inflammation-Name3";
			else if($row2['name_of_the_disease'] == 'Colitis') echo "Colitis-Name1 , Colitis-Name2 , Colitis-Name3";
			else if($row2['name_of_the_disease'] == 'Toothache') echo "Toothache-Name1 , Toothache-Name2 , Toothache-Name3";
			echo "</div></span>";
			echo "<div>* People who suffer from this disease are</div><br>";

			echo "<table>";
			echo "<tr><td>ID</td><td>Name Disease</td><td>The history of the disease for this person</td></tr>";
			echo "<tr><td>".$row2['id']."</td><td>".$row2['name']."</td><td>".$row2['date_of_entry']."</td></tr>";
			while ($row2 = $display->fetch()) {
			echo "<tr>";
				echo "<td>";
				echo $row2['id'];
				echo "</td>";
				echo "<td>";
				echo $row2['name'];
				echo "</td>";
				echo "<td>";
				echo $row2['date_of_entry'];
				echo "</td>";
			echo "</tr>";
			}
			echo "</table>";
			echo "</div>";
		}

	}