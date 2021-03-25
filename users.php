<?php

/**
 * Start the session.
 */
session_start();

/**
 * Check if the user is logged in.
 */
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    //User not logged in. Redirect them back to the login.php page.
    header('Location: login.php');
    exit;
}


/**
 * Print out something that only logged in users can see.
 */

echo 'Congratulations! You are logged in!';

require_once('database.php');


// Get records for users
$queryRecords = "SELECT * FROM users";
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
<h2>Users</h2>
<table>
<tr>

<th>User ID</th>
<th>User Name</th>
<th>Delete</th>
</tr>
<?php foreach ($records as $record) : ?>
<tr>
<td><?php echo $record['id']; ?></td>
<td><?php echo $record['username']; ?></td>
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