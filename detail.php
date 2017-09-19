<?php
include "connection.php";

$id = "";
if(isset($_GET["id"])){
	$id = $_GET["id"];	
}
$articles = $client->php_mongo_app->articles;
//find onle article based on the object id or field id
//$articleDetails = $articles->find(['_id' => new MongoDB\BSON\ObjectID($id)]);
$articleDetails = $articles->find(['id' => $id]);

//get all the articles except one
$articlesData = $articles->find(['id' => ['$ne' => $id]]);

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
				<?php foreach ($articleDetails as $article) { ?>
				<div class="topic">
					<h2><?php echo $article['title']; ?></h2>
					<h5><?php echo $article['creation_date']; ?></h5>
					<?php echo $article['desctiption']; ?>
				</div>
			<?php } ?>
				<div class="social">
					<ul>
						<li><img src="images/google_detail.png" alt="LinkedIn" height="25" width="25"></li>
						<li><img src="images/facebook_detail.png" alt="LinkedIn" height="25" width="25"></li>
						<li><img src="images/twitter_detail.png" alt="LinkedIn" height="25" width="25"></li>
					</ul>
				</div>
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