<?php include 'config/config.php' ?>
<?php include 'libraries/Database.php' ?>
<?php include 'includes/header.php' ?>
<?php
  $db = new Database();

  //query
  $query = "SELECT * FROM posts";

  $posts = $db->select($query);
?>
<?php if($posts): ?>


  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php">Home</a>
          <a class="blog-nav-item" href="post.php">New posts</a>
          <a class="blog-nav-item" href="#">About</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
      <div class="logo">
        <img src="images/rlogo.png" height="120" width="120">
      </div>
        <h1 class="blog-title">The Rutgers Blog</h1>
        <p class="lead blog-description">Sample example of creating a blog with Bootstrap.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

        <?php while ($row = $posts->fetch_assoc()):  ?>

          <div class="blog-post">
            <h2 class="blog-post-title">
              <?php echo $row['title']; ?>
            </h2>
            <p class="blog-post-meta">
            <?php echo $row['time']; ?>
            <a href="#">
              <?php echo $row['author']; ?>
            </a></p>

           <?php echo $row['body'];  ?>


            <a class="readmore" href="posts.php"> Read more...</a>
          </div><!-- /.blog-post -->
        <?php endwhile; ?>
         <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Index</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
    
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Reachout</h4>
            <ol class="list-unstyled">
              <li><a href="https://github.com/ajinkyapadwad" class="ion-social-github">&nbsp; GitHub</a></li>
              <li><a href="https://github.com/ajinkyapadwad" class="ion-social-twitter">&nbsp;Twitter</a></li>
              <li><a href="https://github.com/ajinkyapadwad" class="ion-social-facebook">&nbsp;Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
<?php else : ?>
  <p> No Posts yet ! </p>
<?php endif ?>
<?php include 'includes/footer.php' ?>