<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hospital</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php require 'php/add_patient.php'; ?>
<!-- Start Container -->
<div class="container">

<!-- Start Header -->
<header>
	<div class="top_background"><span>S</span>imple <span>H</span>ospital <span>S</span>ystem</div>
	<div class="background"></div>
	<div>
		<ul>
			<li><a href="#reception" class="checked">New</a></li>
			<li><a href="php/search.php">search</a></li>
			<li><a href="php/display.php">display</a></li>
			<li><a href="php/report.php">report</a></li>
		</ul>
	</div>
</header>
<!-- End Header -->

<!-- Start Content -->
<div class="content">
	<div class="reception" id="reception">
		<form method="post">
			<h1>Reception Room</h1><br>
			<label>ID</label><br>
			<input type="number" name="id" min="1"><span class="error"><?php echo $errorId; ?></span><br><br>
			<label>name</label><br>
			<input type="text" name="name"><span class="error"><?php echo $errorName; ?></span><br><br>
			<label>date of entry</label><br>
			<input type="text" name="date_entry" placeholder="YYYY-MM-DD"><span class="error"><?php echo $errorDateEntry; ?></span><br><br>
			<label>Name OF The Disease</label><br>
			<select name="name_disease" id="name_disease">
				<option value="empty">Disease</option>
				<option value="Cancer">Cancer</option>
				<option value="Inflammation" checked="">Inflammation</option>
				<option value="Colitis">Colitis</option>
				<option value="Toothache">Toothache</option>
			</select>
			<span class="error"><?php echo $errorNameDisease; ?></span><br><br>
			<span id="selectByJavaScript">
				<label style="color:#777">physician name</label><br>
				<select disabled=""><option>Dr Name</option></select>
			</span>
			<span class="error"><?php echo $errorPhysicianName; ?></span><br><br>
			<label>Gender</label><br>
			<input type="radio" name="gender" value="Male" checked><label>Male</label><br>
			<input type="radio" name="gender" value="Female"><label>Female</label><br><br>

			<input type="submit" name="add_patient" value="New Patient">
		</form>
	</div>
</div>
<!-- End Content -->

<!-- Start Footer -->
<footer>
	<div class="copyright">
		All Right Recerved By &copy; <span>Mohamed Abdelfatah</span> & <span>Mohamed Ahmed</span>
	</div>
</footer>
<!-- End Footer -->

</div>
<!-- End Container -->


<!-- My File JS -->
<script>

name_disease.onchange = function(){
	var name_disease = document.getElementById("name_disease").value;
	if(name_disease == 'Cancer')
	{
		document.getElementById("selectByJavaScript").innerHTML =
			'<label>physician name</label><br>' +
			'<select name="physician_name">' +
				'<option value="empty">Dr Cancer Name</option>' +
				'<option value="1">Cancer-Name1</option>' +
				'<option value="2">Cancer-Name2</option>' +
				'<option value="3">Cancer-Name3</option>' +
			'</select>'
	}
	else if(name_disease == 'Inflammation')
	{
		document.getElementById("selectByJavaScript").innerHTML =
			'<label>physician name</label><br>' +
			'<select name="physician_name">' +
				'<option value="empty">Dr Inflammation Name</option>' +
				'<option value="4">Inflammation-Name1</option>' +
				'<option value="5">Inflammation-Name2</option>' +
				'<option value="6">Inflammation-Name3</option>' +
			'</select>'
	}
	else if(name_disease == 'Colitis')
	{
		document.getElementById("selectByJavaScript").innerHTML =
			'<label>physician name</label><br>' +
			'<select name="physician_name">' +
				'<option value="empty">Dr Colitis Name</option>' +
				'<option value="7">Colitis-Name1</option>' +
				'<option value="8">Colitis-Name2</option>' +
				'<option value="9">Colitis-Name3</option>' +
			'</select>'
	}
	else if(name_disease == 'Toothache')
	{
		document.getElementById("selectByJavaScript").innerHTML =
			'<label>physician name</label><br>' +
			'<select name="physician_name">' +
				'<option value="empty">Dr Toothache Name</option>' +
				'<option value="10">Toothache-Name1</option>' +
				'<option value="11">Toothache-Name2</option>' +
				'<option value="12">Toothache-Name3</option>' +
			'</select>'
	}
	else if(name_disease == 'empty')
	{
		document.getElementById("selectByJavaScript").innerHTML =
			'<label style="color:#777">physician name</label><br>' +
			'<select disabled>' +
				'<option value="empty">Dr Name</option>' +
			'</select>'
	}

}

</script>
</body>
</html>
