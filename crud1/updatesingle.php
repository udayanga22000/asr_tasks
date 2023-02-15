<?php
$title = "Upadate Your info";
include "../layout/header.php";
$a=$_GET['id'];
include "db.php";
$result = mysqli_query($conn,"select * from studentinfo where id='$a' ");
$row =mysqli_fetch_array($result);
?>
<h2>Upadate your information below </h2>
<form name="update" method="post" action="">
    <input type="text" name="fname" placeholder="Frist Name" required value="<?php echo $row['fname'];?>" ><br><br> 
    <input type="text" name="lname" placeholder="Last Name" required value="<?php echo $row['lname'];?>" ><br><br> 
    <input type="text" name="city" placeholder="City" required value="<?php echo $row['city'];?>" ><br><br> 
    <select name="groupid" value="<?php echo $row['groupid'];?>">
        <option value="BBCAP22"> BBCAP22 </option> 
        <option value="BBCAP21"> BBCAP21 </option> 
        <option value="Others"> Others </option> 
    </select> <br><br> 
    <input type="Submit" value="Update your value" name="update"><br><br> 
    <input type="Submit" value="Delete your value" name="delete">
</form> 
<?php
if (isset($_POST['update'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $city=$_POST['city'];
    $groupid=$_POST['groupid'];
    $query = mysqli_query($conn,"UPDATE studentinfo set fname='$fname',lname='$lname',city='$city',groupid='$groupid' where id='$a'");
    if($query){
        echo "<h2> Your information is Updated </h2>";
    }
    else{
        echo "Record not modified";
    }
}
if (isset($_POST['delete'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $city=$_POST['city'];
    $groupid=$_POST['groupid'];
    $query = mysqli_query($conn,"DELETE FROM studentinfo where id='$a'");
    if($query){
        echo "<h2> Your information is Deleted </h2>";
    }
    else{
        echo "Record not deleted";
    }
}
?>
<?php
include "../layout/footer.php";
?>