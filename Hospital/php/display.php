<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Template</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/style2.css">
</head>
<body>
	
<!-- Start Container -->
<div class="container">

<!-- Start Header -->
<header>
	<div class="top_background"><span>S</span>imple <span>H</span>ospital <span>S</span>ystem</div>
	<div class="background"></div>
	<div>
		<ul>
			<li><a href="../index.php">New</a></li>
			<li><a href="search.php">search</a></li>
			<li><a href="#display" class="checked">display</a></li>
			<li><a href="report.php">report</a></li>
		</ul>
	</div>
</header>
<!-- End Header -->

<!-- Start Content -->
<div class="content">
	<div class="display" id="display">
		<form method="post">
			<label>display the patient’s medical history</label><br>
			<!-- <input type="text" name="display" placeholder="Name Disease"><br> -->
			<select name="display">
				<option value="empty">Selece Disease</option>
				<option value="cancer">Cancer</option>
				<option value="Inflammation">Inflammation</option>
				<option value="Colitis">Colitis</option>
				<option value="Toothache">Toothache</option>
			</select><br>
			<span></span><br>
			<input type="submit" name="displayBtn" value="Display">
		</form>
	</div>

	<div class="resultOfDisplay">
		<?php require 'display_medical_history.php'; ?>
	</div>
</div>
<!-- End Content -->

<!-- Start Footer -->
<footer>
	<div class="copyright">
		All Right Recerved By &copy; <span>Mohamed Ahmed</span> & <span>Mohamed AbdelFatah</span>
	</div>
</footer>
<!-- End Footer -->

</div>
<!-- End Container -->

</body>
</html>