<?php
namespace App;

require_once 'app/bootstrap.php';

// root url: www.example.com
$router->route('', function()
{
	echo 'root';
});

// admin url: www.example.com/admin
$router->route('admin', function()
{
	include 'app/admin.php';
});

// blog url: www.example.com/blog
$router->route('blog', function()
{
	echo 'blog';
});

// blog post url: www.example.com/blog/cat-name/543
$router->route('blog/(\w+)/(\d+)', function($category, $id)
{
	echo "category={$category}, id={$id}";
});

// execute router
$router->execute($_SERVER['REQUEST_URI']);