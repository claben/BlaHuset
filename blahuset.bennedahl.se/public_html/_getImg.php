<?php
require('dbconnection.php');
$imageID = $_GET['imageID'];
$imgQuery = mysqli_query($con,"SELECT * FROM images WHERE imageID = '$imageID'");
$imgRow = mysqli_fetch_array($imgQuery);
?>
<div class="center">
<img src="<?php echo ($imgRow['imagePath']); ?>" style="max-width:800px; max-height:600px;" class="border"/>
<p><b><?php echo ($imgRow['text']); ?></b></p>
</div>