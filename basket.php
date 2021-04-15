<?php


require_once('database.php');


// Get records from basket
$queryRecords = "SELECT * FROM basket";
$statement3 = $db->prepare($queryRecords);
$statement3->bindValue(':id', $id);
$statement3->execute();
$records = $statement3->fetchAll();
$statement3->closeCursor();
?>
<div class="container">
<?php
include('includes/header.php');
?>


<section>
<!-- display a table of records -->
<h2>Basket</h2>
<table>
<tr>

<th>Image</th>
<th>Pc Name</th>
<th>Price</th>
<th>Delete</th>
</tr>
<?php foreach ($records as $record) : ?>
<tr>
<td><img src="image_uploads/<?php echo $record['image']; ?>" width="100px" height="100px" /></td>
<td><?php echo $record['pc_name']; ?></td>
<td><?php echo $record['pc_price']; ?></td>
<td>
    <form action="delete_user.php" method="post" id="delete_product_form">
        <input type="hidden" name="id" value="<?php echo $id['id']; ?>">
        <input type="submit" value="Delete" id="delete_button">
    </form>
</td>
</form>
</tr>
<?php endforeach; ?>
</table>
</section>
<?php
include('includes/footer.php');
?>