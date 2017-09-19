<?php
include "connection.php";
$articles = $client->php_mongo_app->articles;
$articlesData = $articles->find([],['limit' => 10]);

//get list of recent post in right panel
$articlesList = $articles->find([],['limit' => 5]);

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
			<?php foreach ($articlesData as $article) { ?>
				<div class="topic">
					<h2><?php echo $article['title']; ?></h2>
					<h5><?php echo $article['creation_date']; ?></h5>
					<?php echo $article['summary']; ?>
					<a href="detail.php?id=<?php echo $article['id']; ?>">Read More</a>
				</div>
			<?php } ?>
				
			</article>
			<aside>
				<div class="intro">
					<h2>Hello & Welcome</h2>
					<img src="images/Desert.jpg" alt="Smiley face" height="200" width="250">
					<p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font....</p>
					<a href="about.php">Read More</a>
				</div>
				<div class="subscribe">
					<h2>Never Miss a Post. Subscribe Now!</h2>
					<p>I'm a paragraph. Click here to add your own text and edit me. It's easy.</p>
					<?php if(isset($_GET["message"])){ ?>
					<p style="color:green">Thanks for your subscription.</p>
					<?php } ?>
					<form name="subscribe" method="post" action="subscribe.php">
						<input type="text" name="email">
						<button type="sumbmit">Subscribe Now</button>
					</form>
				</div>
				<div class="recent-post">
					<h2>Recent Post</h2>
					<?php foreach ($articlesList as $article) { ?>
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