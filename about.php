<?php
include "connection.php";

$page = "about";
$pages = $client->php_mongo_app->pages;
$pageContent = $pages->find(['page_id' => $page]);

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
				<?php foreach ($pageContent as $content) { ?>
					<div class="topic">
						<h2><?php echo $content['title']; ?></h2>
						<?php echo $content['desctiption']; ?>
					</div>
				<?php } ?>
				
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