<?php
require_once('database.php');

// Get IDs
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

// Delete the product from the database
if ($id != false) {
    $query = "DELETE FROM users
              WHERE id = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}

// display the Product List page
include('users.php');
?>