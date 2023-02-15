<?php
$title = "Read data from db";
include "../layout/header.php";
?>
<?php
include 'db.php';
$sql = "select * from studentinfo ";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "
    <table class='table'>
    <tr><th>ID</th><th>First Name</th><th>Last Name</th><th>City</th><th>Group ID</th></tr>";
    while($row=$result->fetch_assoc()){
    echo"
    <tr>
    <td><a href='updatesingle.php?id=$row[id]'>$row[id]</a></td>
    <td>$row[fname]</td>
    <td>$row[lname]</td>
    <td>$row[city]</td>
    <td>$row[groupid]</td>
    </tr>
     ";
    }
    echo"</table>";
}
else{
    echo"No Result";
}
$conn->close();
?>
<?php
include "../layout/footer.php";
?>