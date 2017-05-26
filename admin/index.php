<?php include 'includes\header.php' ?>
<?php 
$db = new Database;
$query = "SELECT posts.*, categories.name FROM posts
            INNER JOIN  categories
            ON posts.category = categories.id";
$posts = $db->select($query);
?>
<table class="table table-striped">

<tr>
    <th>ID</th>
    <th>TITLE</th>
    <th>CATEGORY</th>
    <th>AUTHOR</th>
    <TH>DATE</TH>
</tr>

<?php while($row = $posts -> fetch_assoc()) : ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><a href="edit_post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></td>
    <td><?php echo $row['category']; ?></td>
    <td><?php echo $row['author']; ?></td>
    <td><?php echo Fdate($row['time']); ?></td>
</tr>
<?php endwhile; ?>


<tr>
    <th>ID</th>
    <th>TITLE</th>

</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
</table>

<?php include 'includes\footer.php' ?>

