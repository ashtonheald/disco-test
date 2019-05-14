<?php 
$servername = "localhost";
$username = "root";
$password = "Agh1013132_";
$dbname = "the_killers_discography";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/header.php' ?>
</head>
<body class="albums">
	<a href="index.html"><img class="logo" src="images/killers_logo.png" alt="Kilers Logo" width="400"></a>

	<header>
		<nav class="navbar bg-primary navbar-expand-lg navbar-inverse navbar-toggleable-sm">

			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarButton">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarButton">

				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
					<li><a class="nav-item nav-link" href="index.php">Home</a></li>
					<li><a class="nav-item nav-link ml-sm-auto active" href="albums.php">Albums</a></li>
					<li><a class="nav-item nav-link" href="about.php">The Band</a></li>
				</ul>
			</div>       
		</nav>
	</header>
	<div class="cards">




		<div class="card card-album" style="padding-bottom:60px;">
			<div class="card-title">
				<?php  
				// loop through an array then loop through
				// or
				// for while loop --- https://www.w3schools.com/php/exercise.asp?filename=exercise_loops3
				$sql = "SELECT * FROM albums INNER JOIN tracks ON albums.album_id = tracks.album_id";
				$result = $conn->query($sql);

				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo $row['album_cover'] . '<h2>' . $row['album_title'] . '</h2>' . '<small>' . $row['album_year'] . '</small>';
						echo '<li class="list-group-item">' . $row['track_name'] . '</li>';
						}
				} else {
					echo "0 results";
				}
				?>
</div>
</div>
	</div>

<footer>
	<h3><a href="https://en.wikipedia.org/wiki/The_Killers" target="_blank">Source</a></h3>
	<small>&copy; 2017 Tyler Gilbert</small>
</footer>
</body>
</html>
