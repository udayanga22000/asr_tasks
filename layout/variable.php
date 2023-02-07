<?php include "header.php" ?>
<h5> Exercise 3 In-class Task Variable & Operators 07.02.2023 (variable.php) </h3>
<h4>1. Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using tag: Hello …., You are welcome to my site<br>
    2.Apply bootstrap style to the form.
</h4>

<form action="action.php" method="post">
<div class="row">
    <div class="col">
        <input type="text" name="fname" required placeholder="First Name: " class="form-control"> 
    </div>
    <div class="col">
        <input type="text" name="lname" required placeholder="Last Name: " class="form-control">
    </div>
</div>

<div class="row">
    <div class="col">
    Birth Date:   <input type="date" name="bdate" class="form-control" >
    </div>
    <div class="col">
    Select Fav Color:   <input type="color" name="color" class="form-control">
    </div>
</div> 
<h4>3. Prepare a simple html table and apply bootstrap style to the table.</h4>
<input type="submit" name="submit">  
</form>
<table class="table table-bordered">
<tr>
<th> S.N </th><th> Name </th><th> Grade </th>
</tr>
<tr>
<td> 1 </th><th> Pekka </th><th> 5 </td>
</tr>
<td> 2 </th><th> Johanna </th><th> 4 </td>
</tr>
<td> 3 </th><th> John </th><th> 5 </td>
</tr>
</table>
<h4> 4. Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string.</h4>
<?php
$name1 ="Rajakaruna";
$name2 ="Udayanga";
echo $name1.$name2;
echo "<br> String length is ".strlen($name1 . $name2);
?>
<h4>5. Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.</h4>
<?php $num1="298";
    $num2="234";
    $num3="46";
$total = $num1+$num2+$num3;
echo "Total=".$total;
?>
<h4>6. Write a PHP script to detect the browser being used to view your pages</h4>
<?php echo $_SERVER['HTTP_USER_AGENT'] . "\n"; ?>
<h4>7. Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file.</h4>

<?php include "footer.php" ?>