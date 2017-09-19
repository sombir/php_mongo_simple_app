<?php
include "connection.php";

$articles = $client->php_mongo_app->articles;
//get all the articles details
$articlesData = $articles->find();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="css/style_semantic.css"/>
</head>
<body>
	<div id="container">
		<header>
			<div class="logo">
				<!--<img src="images/Desert.jpg" alt="Smiley face" height="208" width="100%">-->
			</div>
			<nav>
				<a href="#" class="menu-icon"></a>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</header>
		<section>
			<article>
				<div class="topic">
				<h2>Contact Us</h2>
				<div class="contact-form">
					<form method="post" name="contact">					
						<label>Name:</label>
						<input type="text" name="name" required>
						<label>Email:</label>
						<input type="text" name="email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" required>
						<label>Phone:</label>
						<input type="text" name="phone" pattern="[0-9]{10}" required>
						<label>&nbsp;&nbsp;</label>
						<button>Submit</button>
					</form>
				</div>
				<div id="map" style="width:100%;height:400px"></div>
				<script>
					function myMap() {
						var mapOptions = {
							center: new google.maps.LatLng(28.4579, 77.0818),
							zoom: 8	
						}
						var map = new google.maps.Map(document.getElementById("map"), mapOptions);
						var myLatLng = {lat: 28.4595, lng: 77.0266};
						var marker = new google.maps.Marker({
						  position: myLatLng,
						  map: map,
						  title: 'Gurugram, Haryana, India'
						});
					}
				</script>
				<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
			</article>
			<aside>
				<div class="recent-post">
					<h2>Recent Post</h2>
					<?php foreach ($articlesData as $article) { ?>
						<h4><a href="detail.php?id=<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a></h4>
					<?php } ?>
				</div>
			</aside>
		</section>
		<footer>
			<div class="copyright">
				<p>&copy; 2017 by SS.</p>
				<ul>
					<li><img src="images/google.png" alt="LinkedIn" height="25" width="25"></li>
					<li><img src="images/facebook.png" alt="LinkedIn" height="25" width="25"></li>
					<li><img src="images/twitter.png" alt="LinkedIn" height="25" width="25"></li>
					<li><img src="images/linkedin.png" alt="LinkedIn" height="25" width="25"></li>
				</ul>
			</div>
		</footer>
	</div>
</body>
</html>