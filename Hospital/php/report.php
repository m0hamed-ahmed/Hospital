<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Template</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/style2.css">
</head>
<body>
	<?php require 'report_date.php'; ?>
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
			<li><a href="display.php">display</a></li>
			<li><a href="#report" class="checked">report</a></li>
		</ul>
	</div>
</header>
<!-- End Header -->

<!-- Start Content -->
<div class="content">
	<div class="report" id="report">
		<p>The names of the patients according to a specific date</p>
		<form method="post">
			<label>Enter Date</label><br>
			<input type="text" name="reportByDate" placeholder="YYYY-MM-DD">
			<div class="errorreport"><?php echo $errorReportByDate ?></div>
			<input type="submit" name="reportBtn" value="Report">
		</form>
	</div>

	<div class="resultOfDisplay">
		<?php echo $table2;; ?>
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