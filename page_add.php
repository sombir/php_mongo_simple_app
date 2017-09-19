<?php
include "connection.php";

$pages = $client->php_mongo_app->pages;
$pages->drop();
$pagesData = array(
    array(
        'page_id' => 'about', 
        'title' => 'About US', 
        'desctiption' => '<p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. </p> <p>To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post.</p><p>Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin.</p> <p>To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back.</p> <p>To really engage your site visitors we suggest you blog about subjects that are related to your site or busin. To create your first blog post, click here and select Manage Posts > New Post. Blogs are a great way to connect with your audience and keep them coming back. To really engage your site visitors we suggest you blog about subjects that are related to your site or busin.</p>', 
        'creation_date' => "April 5, 2016",
        'published' => "1"
    )
);

// To insert a dict, use the insert method.
$pages->insertMany($pagesData);

?>