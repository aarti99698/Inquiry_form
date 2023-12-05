<?php
include("config.php");

$Id = $_GET['Id'];

$query = "DELETE FROM  register WHERE Id ='$Id' ";
$data = mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('record Delete')</script>";
    ?>

        <meta http-equiv="refresh" content="1; URL=http://localhost/inquiry_form/display.php" />

    <?php
}
else{
    echo "<script>alert('failed to Delete')</script>";
}
?>