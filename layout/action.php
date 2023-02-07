<?php include "header.php";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$bdate = $_POST['bdate'];
$color = $_POST['color'];
echo "<h3> Hello $fname $lname Welcome to my site </h3>";
echo "<h3>Your Birth Day is $bdate Your Color is $color </h3>";
?>

<?php include "footer.php" ?>