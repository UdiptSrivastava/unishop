<?php 

include ("header.php") ;
include ("connect.php");
$cat=$_GET['cat'];
echo "<script>console.log('Debug Objects: " . $cat . "' );</script>";

// $sql=mysqli_query($con,"select * from product where cat='$cat' ")or die('Error:- '.mysqli_error($con));
// echo "<script>console.table('Debug Objects: " . $sql . "' );</script>";
$sql = "SELECT sno, name, address FROM product where cat='$cat' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo "<br> id: ". $row["sno"]. " - Name: ". $row["name"]. " " . $row["address"] . "<br>";
   }
} else {
   echo "0 results";
}
 include ("footer.php")

 ?>
