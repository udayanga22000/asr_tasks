<?php 
$title = "Exaercise: HAMK oy";
include "header.php" ?>
    <h3>3.1 Write a simple PHP script to print your information (Name and your groupid).</h3>
<?php
echo "Rajakaruna Mudiyanselage Udayanga <br>";
echo "BBCAP_Team18";
?>
<h3>3.2 Write PHP code to display the following message.</h3>
<?php
echo "Hellow world ! My name is \"David\"";
?>
<h3>3.3 Write the PHP code in to display the current date.</h3>
<?php echo date("d.m.Y") ?>
<script>
document.write("Hello world this is JavaScript");

</script>
<noscript>
Please enable JavaScript to view this content,
</noscript>
<input type="button" onclick="hello()" value="Click me">
<h3>3.4 PHP is interesting. </h3>
<?php
$title1 = "PHP is interesting";
echo "<h1>" . $title1 . "</h1>";
?>
<script>
    //window.alert
   // window.alert("This will triger and alert box");
   // window.alert(5+10);
    document.write("Hello this is interesting");
</script>
<button onclick="add()">Click to Add"></button>
<hr>
<p id="place1" style="color:red; background-color:yellow;"></p>
<span id="place2" style="color:white; background-color:green;"></span>
<script>
    document.getElementById("place1").innerHTML="This will go to place1";
    document.getElementById("place2").innerHTML="This will go to span";

</script>
<h3>3.5 Table and Variables</h3>

<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo "
<table>
<tr>
<th> S.N </th><th> Name </th><th> Grade </th>
</tr>
<tr>
<td> 1 </th><th> Pekka </th><th> $g1 </td>
</tr>
<td> 2 </th><th> Johanna </th><th> $g2 </td>
</tr>
<td> 3 </th><th> John </th><th> $g3 </td>
</tr>
</table>
";
?>
<h3>4 Screenshot of the development environment</h3>
<img src="image1.jpg" alt="Docker img">
<h2>changing the background color</h2>
<foam>
    <input type="color" name="background" onchange="changeColor('background',this.value)">
</foam>

<?php include "footer.php" ?>

