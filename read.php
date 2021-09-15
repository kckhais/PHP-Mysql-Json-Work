<?php

if (isset($_POST['submit'])) {
  try {
    require "config.php";

    $connection = new PDO($dsn, $username, $password, $options);

    $sql = "SELECT *
    FROM movie
    WHERE name = :name";

    $name = $_POST['name'];

    $statement = $connection->prepare($sql);
    $statement->bindParam(':name', $name, PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->fetchAll();
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}
?>
<?php require "header.php"; ?>

<?php
if (isset($_POST['submit'])) {
  if ($result && $statement->rowCount() > 0) { ?>
    <h2>Results</h2>

    <table>
      <thead>
<tr>
  <th>#</th>
  <th>Movie Name</th>
  <th>Year</th>
  <th>Directed By</th>
  <th>Date Added</th>
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["year"]; ?></td>
<td><?php echo $row["direction"]; ?></td>
<td><?php echo $row["date"]; ?> </td>
      </tr>
    <?php } ?>
      </tbody>
  </table>
  <?php } else { ?>
    No results found for <?php echo ($_POST['name']); ?>.
  <?php }
} ?>

    <h2>Find Film based on Name</h2>

<form method="post">
    <label for="name">Movie Name</label>
    <input type="text" id="name" name="name">
    <input type="submit" name="submit" value="View Results">
</form>

<a href="index.php">Back to home</a>
<?php require "footer.php"; ?>