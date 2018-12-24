<?php
include_once ('./config.php');
//Delete Query
$data = "DELETE FROM userinfo WHERE id='$_GET[id]'";
//Execute Query
if (!mysqli_query($con, $data)) {
    echo "Not Delete This data";
} else {
    echo "Data Delete Successfully";
}
header("refresh:2; url=index.php");
?>
