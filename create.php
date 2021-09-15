<?php

if (isset($_POST['submit'])) {
  require "config.php";

  try {
    $connection = new PDO($dsn, $username, $password, $options);

    $new_data = array(
      "name" => $_POST['name'],
      "year"  => $_POST['year'],
      "direction"     => $_POST['direction']
    );

    $sql = sprintf(
"INSERT INTO %s (%s) values (%s)",
"movie",
implode(", ", array_keys($new_data)),
":" . implode(", :", array_keys($new_data))
    );

    $statement = $connection->prepare($sql);
    $statement->execute($new_data);
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }

}
?>

<?php require "header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) { ?>
<?php echo $_POST['name']; ?> successfully added.
<?php } ?>
    <form method="post">
    	<label for="name">Name of the Movie</label>
    	<input type="text" name="name" id="name">
    	<label for="year">Year</label>
    	<input type="text" name="year" id="year">
    	<label for="direction">Directed By</label>
    	<input type="text" name="direction" id="direction">
    	<input type="submit" name="submit" value="Submit">
    </form>

    <a href="index.php">Back to home</a>

    <?php include "footer.php"; ?>