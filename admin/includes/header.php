<?php include '../config/config.php' ?>
<?php include '../libraries/Database.php' ?>
<?php include '../includes/header.php' ?>
<?php include '../helpers/format_helper.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,600" rel="stylesheet" type="text/css">
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

    <title>Custom Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/blog.css" rel="stylesheet">

 <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php">Dashboard</a>
          <a class="blog-nav-item" href="add_post.php">Add posts</a>
          <a class="blog-nav-item" href="add_category.php">Add categories</a>
          <a class="blog-nav-item" href="http:://localhost/Custom-Blog">Go to Rutgers Blog</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
      <div class="logo">
        <img src="../images/rlogo.png" height="120" width="120">
      </div>
        <h1 class="blog-title">Admin Central</h1>
        <p class="lead blog-description">Admin page for CRUD.</p>
      </div>

<div class="col-sm-12 blog-main">