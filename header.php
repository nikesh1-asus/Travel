<?php

$sql="select * from tbl_banner where id=1";
$compile= mysqli_query($con, $sql);
$fetch = mysqli_fetch_row($compile);

?>
<img src="image/<?php echo$fetch[1]; ?> " width="1200" height="400">