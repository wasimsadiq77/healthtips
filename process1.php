<?php
include_once 'config.php';   
$sql = "DELETE FROM complaint WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($link, $sql)) {
    echo "Record deleted successfully";
    header("location: doctorhome.php");
} else {
    echo "Error deleting record: " . mysqli_error($link);
}
mysqli_close($link);
?>