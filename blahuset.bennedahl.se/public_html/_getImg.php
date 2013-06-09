<?php
require('dbconnection.php');
$imageID = $_GET['imageID'];
$imgQuery = mysqli_query($con,"SELECT * FROM images WHERE imageID = '$imageID'");
$imgRow = mysqli_fetch_array($imgQuery);
?>
<img src="<?php echo ($imgRow['imagePath']); ?>" style="max-width:800px; max-height:600px;" />
