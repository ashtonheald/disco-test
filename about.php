<?php 
$pageTitle = 'The Killers About'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include './includes/header.php' ?>
</head>

<body class="about">
<a href="index.html"><img class="logo" src="images/killers_logo.png" alt="Killers Logo" width="400"></a>
	
<header>
        <nav class="navbar bg-primary navbar-expand-lg navbar-inverse navbar-toggleable-sm">

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarButton">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarButton">
            
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li><a class="nav-item nav-link" href="index.php">Home</a></li>
                <li><a class="nav-item nav-link" href="albums.php">Albums</a></li>
                <li><a class="nav-item nav-link ml-sm-auto active" href="about.php">The Band</a></li>
                </ul>
            </div>        
    </nav>
</header>
	
	<div class="container">
		<h2 id="membersTitle">The Killers</h2>
		<div class="container card-group">
			<div class="card mb-2">
				<img class="card-img img-fluid" src="images/brandon.jpg" alt="Brandon">
				<h3 class="card-title members">
				Brandon Flowers</h3>
				<p class="card-text">Vocals</p>
			</div>
			<div class="card mb-2">
				<img class="card-img img-fluid" src="images/dave.jpg" alt="Dave">
				<h3 class="card-title members">
				Dave Keuning</h3>
				<p class="card-text">Guitar</p>
			</div>
			<div class="card mb-2">
				<img class="card-img img-fluid" src="images/mark.jpg" alt="Mark">
				<h3 class="card-title members">
				Mark Stoermer</h3>
				<p class="card-text">Bass, vocals, guitar</p>
			</div>
			<div class="card mb-2">
				<img class="card-img img-fluid" src="images/ronnie.jpg" alt="Ronnie">
				<h3 class="card-title members">
				Ronnie Vannucci, Jr.</h3>
				<p class="card-text">Drums</p>
			</div>
		</div>
	</div>
	<div class="jumbotron jumbotron-fluid">
		<h2 class="display-5 ml-3">About The Band</h2>
	<p class="lead ml-3">The Killers are an American rock band formed in Las Vegas, Nevada, in 2001 by members Brandon Flowers (pictured second to left), and Dave Keuning (pictured far right). Mark Stoermer (pictured second to right) and Ronnie Vannucci, Jr. would complete the lineup of the band. The Killers are seen as one of the biggest rock bands of the 21st century, and have sold 22 million records worldwide. They have performed in over 50 countries and six continents.</p>
	</div>

	<footer>
		<small>&copy; 2017 Tyler Gilbert</small>
	</footer>
</body>
</html>
