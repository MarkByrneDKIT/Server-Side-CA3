<?php
require('database.php');
$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!-- the head section -->
 <div class="container">
<?php
include('includes/header.php');
?>
        <h1>Add Record</h1>
        <form action="add_record.php" method="post" enctype="multipart/form-data"
              id="add_record_form">

            <label>Category:</label>
            <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select>
            <br>
            <label>Name:</label>
            <input id="name" type="input" name="name" required placeholder="e.g. Budget Computer" pattern="[a-zA-Z\s]+" label="No Numbers Allowed." onBlur="name_validation();"><span id="name_err"></span>
            <br>

            <label>CPU:</label>
            <input id="cpu" type="input" name="CPU" required placeholder="e.g. Intel Core I5" pattern=".{2,}" title="Please Enter Full CPU Name." onBlur="CPU_validation();"><span id="cpu_err"></span>
            <br>

            <label>Release Date:</label>
            <input id="date" type="input" name="date" required placeholder="e.g. YYYY-MM-DD" pattern="\d{4}\-(0?[1-9]|1[012])\-(0?[1-9]|[12][0-9]|3[01])*" title="Please Enter The Date In The Correct Format." onBlur="date_validation();"><span id="date_err"></span>
            <br>

            <label>List Price:</label>
            <input id="price" type="input" name="price" required placeholder="e.g. €345.67" onBlur="price_validation();"><span id="price_err"></span>
            <br>        
            
            <label>Image:</label>
            <input type="file" name="image" accept="image/*" required/>
            <br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Add Record">
            <br>
        </form>
        <p><a href="index.php">View Homepage</a></p>
    <?php
include('includes/footer.php');
?>
<script src="validation.js"></script>;