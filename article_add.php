<?php
include "connection.php";

$articles = $client->php_mongo_app->articles;
$articles->drop();
$articleData = array(
    array(
        'id' => '1', 
        'title' => 'Online Marketing Hype A-Z', 
        'summary' => '<p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin...</p>',
        'desctiption' => '<p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. </p> <p>To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post.</p><p>Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin.</p> <p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back.</p> <p>To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin.</p>', 
        'creation_date' => "April 5, 2016",
        'published' => "1"
    ),
	array(
        'id' => '2', 
        'title' => '5 Powerful Tools For B2B Sales Managment', 
		 'summary' => '<p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin...</p>',
        'desctiption' => '<p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. </p> <p>To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post.</p><p>Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin.</p> <p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back.</p> <p>To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin.</p>', 
        'creation_date' => "April 5, 2016",
        'published' => "1"
    ),
	array(
        'id' => '3', 
        'title' => 'Make Your To-Do List Actually Doable', 
		 'summary' => '<p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin...</p>',
        'desctiption' => '<p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. </p> <p>To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post.</p><p>Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin.</p> <p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back.</p> <p>To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin.</p>', 
        'creation_date' => "April 5, 2016",
        'published' => "1"
    ),
	array(
        'id' => '4', 
        'title' => 'Why Success is About Action', 
		 'summary' => '<p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin...</p>',
        'desctiption' => '<p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. </p> <p>To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post.</p><p>Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin.</p> <p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back.</p> <p>To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin.</p>', 
        'creation_date' => "April 5, 2016",
        'published' => "1"
    ),
	array(
        'id' => '5', 
        'title' => 'How to Set Yourself Apart Through Brand and Design', 
		 'summary' => '<p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin...</p>',
        'desctiption' => '<p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. </p> <p>To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post.</p><p>Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin.</p> <p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back.</p> <p>To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin.</p>', 
        'creation_date' => "April 5, 2016",
        'published' => "0"
    ),
	array(
        'id' => '6', 
        'title' => 'The Ultimate Consulting Landing Page', 
		 'summary' => '<p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin...</p>',
        'desctiption' => '<p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. </p> <p>To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post.</p><p>Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin.</p> <p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back.</p> <p>To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin.</p>', 
        'creation_date' => "April 5, 2016",
        'published' => "0"
    )
);

// To insert a dict, use the insert method.
$articles->insertMany($articleData);

?>