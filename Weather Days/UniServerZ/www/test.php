
<font color="red">
<font face = "Verdana" size = "8">
<center>Football Shirts<br>
<style> table, th, td {border: 2px solid black;} </style>
<?php   
$dbhost = "localhost"; //server name localhost or 127.0.0.1
$dbuser = "root";      //User name default root 
$dbpass = "root";  //Password reset at start of uniserver yours is "root"
$dbname = "gt40";      //Database name
?>
<!-- add two input boxes -->
<font color="Blue">
<font face ="Verdana" size = "50">
<!-- add a search button -->
<form action="search.php" method="post">
Minimum Price: <input type="text" name="minval" ><br>   
Maximum Price: <input type="text" name="maxval" ><br>
<pre>
<input 
  type="submit" 
  value="Search"
  style="font-size : 40px; " 
/>
</pre>
<?php
$db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); 
if(!$db) {die("Error connecting to Database");}
//here is the basic query
$query="SELECT * FROM parts";
$result = mysqli_query($db, $query);
?>
<table style="width:75%">
<tr>
    <th>ID</th>
    <th>Team</th>
    <th>League</th>
    <th>Colour</th>
    <th>Price</th>
<tr>
<?php
if (mysqli_num_rows($result) > 0) 
  {
  //output data of each row
  while($row = mysqli_fetch_assoc($result)) 
    {
    ?>
    <tr>
    <th><?php echo $row["ID"]; ?>         </th>
    <th><?php echo $row["Description"]; ?></th>
    <th>&pound<?php echo $row["Price"]; ?></th>
    <th><?php echo $row["Picture"]; ?>    </th>
    </tr>
    <?php
    }
} else {echo "0 results</br>";}
?>
</table>
<?php
mysqli_close($db);
?>


$query="SELECT * FROM parts WHERE price<".$maximum;
    
$query="SELECT * FROM parts WHERE price>".$minimum.“ AND price<”.maximum;

The full PHP code to check the input boxes for values and create the correct query is as follows:-

if($minimum=="" && $maximum=="") $query="SELECT * FROM parts";

if($minimum!="" && $maximum=="") $query="SELECT * FROM parts WHERE price>".$minimum;

if($minimum=="" && $maximum!="") $query="SELECT * FROM parts WHERE price<".$maximum;

if($minimum!="" && $maximum!="") $query="SELECT * FROM parts WHERE price>".$minimum." AND price<".$maximum;


And the full search.php code looks as shown on the following page.
 
<html>
<body>
<style>
table, th, td {border: 2px solid black;}
</style>
<font size="8" face = "Verdana" color="red">
<center>Search Results<br></center>
<font face = "Verdana" color="blue" size = "4">
<?php
//get the input box values from connect.php
$minimum = $_POST["minval"];
$maximum = $_POST["maxval"];
echo("<p>minval=  " . $minimum);
echo("<p>maximum= " . $maximum);

if($minimum=="") echo("<p>no minimum input");
if($maximum=="") echo("<p>no maximum input");

if($minimum=="" && $maximum=="") $query="SELECT * FROM parts";
if($minimum!="" && $maximum=="") $query="SELECT * FROM parts WHERE price>".$minimum;
if($minimum=="" && $maximum!="") $query="SELECT * FROM parts WHERE price<".$maximum;
if($minimum!="" && $maximum!="") $query="SELECT * FROM parts WHERE price>".$minimum." AND price<".$maximum;
//lets print the query to check its correct based on what is input
echo("<p>query=".$query);

$dbhost = "localhost"; //server name localhost or 127.0.0.1
$dbuser = "root";      //User name default root 
$dbpass = "password";  //Password reset at start of uniserver yours is "root"
$dbname = "gt40";      //Database name
$db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); 
if(!$db) {die("Error connecting to Database");}

$result = mysqli_query($db, $query);
?>
<table style="width:75%">
<tr>
    <th>Product ID</th>
    <th>Description</th>
    <th>Price</th>
    <th>Image</th>
<tr>
<?php
if (mysqli_num_rows($result) > 0) 
  {
  //output data of each row
  while($row = mysqli_fetch_assoc($result)) 
    {
    ?>
    <tr>
    <th><?php echo $row["ID"]; ?>         </th>
    <th><?php echo $row["Team"]; ?></th>
    <th><?php echo $row["League"]; ?>      </th>
    <th>    <?php echo $row["Colour"]; ?></th>
        <th>    <?php echo $row["Price"]; ?></th>
    </tr>
    <?php
    }
} else {echo "0 results</br>";}
?>
</table>
<?php
mysqli_close($db);





?>
<form action="connect.php" method="post">
<pre>
<input 
  type="submit" 
  value="Back"
  style="font-size : 40px; " 
/>
</pre>
</body>
</html>

