<?php 
require('dbconnection.php');
$galleri = $_GET['galleri'];
$query = mysqli_query($con,"SELECT * FROM images WHERE gallery = '$galleri'");
$imgQuery = mysqli_query($con,"SELECT * FROM images WHERE gallery = '$galleri' ORDER BY imageID ASC");
$imgRow = mysqli_fetch_array($imgQuery);
while($row = mysqli_fetch_array($query)){
?>
<div class="imgHolderSmall border" onClick="image(<?php echo ($row['imageID']); ?>);">
	<img src="<?php echo ($row['imagePath']); ?>" style="max-height:80px; cursor:pointer;" onClick="image(<?php echo ($row['imageID']); ?>);"/>
</div>
<?php
}
?>
<script type="text/javascript">image(<?php echo ($imgRow['imageID']); ?>);</script>
