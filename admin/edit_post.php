<?php include 'includes\header.php' ?>

<form method="post" action="add_post.php">
  <div class="form-group" >
    <label >Title</label>
    <input name=='title' type="type" class="form-control" placeholder="enter title">
  </div>

  <div class="form-group" >
    <label >Body</label>
    <input type="type" name=='body' class="form-control" placeholder="enter post body">
  </div>

  <div class="form-group" >
    <label >Category</label>
    <select name="Category" class="form-control">
    	<option>1</option>
    	<option>2</option>
    	<option>3</option>
    	<option>4</option>  	
    </select>
  </div>

  <div class="form-group" >
    <label >Author</label>
    <input type="type" class="form-control" placeholder="enter author name">
  </div>

    <div class="form-group" >
    <label >Tags</label>
    <input type="type" name=='tags' class="form-control" placeholder="enter tags">
  </div>
  <div>
  <a class="pull-left" href="index.php"><button> Cancel </button></a>
  <button class="pull-right" type="submit" class="btn btn-default">Submit</button>
  </div>
</form>


<?php include 'includes\footer.php' ?>