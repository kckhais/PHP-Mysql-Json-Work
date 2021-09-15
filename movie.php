<?php
require('config.php');  
$sql="SELECT * FROM movie ORDER BY id;";
$result = mysql_query($sql, $conn);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysql_fetch_assoc($result)) {
    echo $row['id'] . "<br>"; 
}
}
?>