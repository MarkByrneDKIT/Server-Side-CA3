<?php
require('database.php');

$record_id = filter_input(INPUT_POST, 'record_id', FILTER_VALIDATE_INT);
$query = 'SELECT *
          FROM records
          WHERE recordID = :record_id';
$statement = $db->prepare($query);
$statement->bindValue(':record_id', $record_id);
$statement->execute();
$records = $statement->fetch(PDO::FETCH_ASSOC);
$statement->closeCursor();
?>
<!-- the head section -->
 <div class="container">
<?php
include('includes/header.php');
?>
        <h1>Edit Product</h1>
        <form action="edit_record.php" method="post" enctype="multipart/form-data"
              id="add_record_form">
            <input type="hidden" name="original_image" value="<?php echo $records['image']; ?>" />
            <input type="hidden" name="record_id"
                   value="<?php echo $records['recordID']; ?>">

            <label>Category ID:</label>
            <input id="catID" type="category_id" name="category_id"
                   value="<?php echo $records['categoryID']; ?>" onBlur="category_validation();"><span id="id_err"></span>
            <br>

            <label>Name:</label>
            <input id="name" type="input" name="name"
                   value="<?php echo $records['name'];?>"
                   required placeholder="e.g. Joe Blogs" onBlur="name_validation();"><span id="name_err"></span>
            <br>

            <label>CPU:</label>
            <input id="cpu" type="input" name="CPU"
                   value="<?php echo $records['CPU']; ?>"
                   required placeholder="e.g. Intel Core I5" onBlur="CPU_validation();"><span id="cpu_err"></span>
            <br>

            <label>List Price:</label>
            <input id="price" type="input" name="price"
                   value="<?php echo $records['price']; ?>"
                   required placeholder="e.g. €345.67" onBlur="price_validation();"><span id="price_err"></span>
            <br>

            <label>Release Date:</label>
            <input id="date" type="input" name="date"
                   value="<?php echo $records['date']; ?>"
                   required placeholder="e.g. YYYY-MM-DD" onBlur="date_validation();"><span id="date_err"></span>
            <br>

            <label>Image:</label>
            <input type="file" name="image" accept="image/*" />
            <br>            
            <?php if ($records['image'] != "") { ?>
            <p><img src="image_uploads/<?php echo $records['image']; ?>" height="150" /></p>
            <?php } ?>
            
            <label>&nbsp;</label>
            <input type="submit" value="Save Changes">
            <br>
        </form>
        <p><a href="index.php">View Homepage</a></p>
    <?php
include('includes/footer.php');
?>
<script src="validation.js"></script>;