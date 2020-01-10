<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Template</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/style2.css">
	<style>

	</style>
</head>
<body>
<?php require 'search_id.php'; ?>
<!-- Start Container -->
<div class="container">

<!-- Start Header -->
<header>
	<div class="top_background"><span>S</span>imple <span>H</span>ospital <span>S</span>ystem</div>
	<div class="background"></div>
	<div>
		<ul>
			<li><a href="../index.php">New</a></li>
			<li><a href="#search" class="checked">search</a></li>
			<li><a href="display.php">display</a></li>
			<li><a href="report.php">report</a></li>
		</ul>
	</div>
</header>
<!-- End Header -->

<!-- Start Content -->
<div class="content">
	<div class="search" id="search">
		<form method="post">
			<label>Search By ID</label><br>
			<input type="number" name="search" placeholder="Enter ID" min="1"><br>
			<?php echo $errorSearchId ?>
			<input type="submit" name="searchBtn" value="Search">
		</form>
	</div>

	<div class="resultOfSearch">
		<?php echo $table; ?>
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