<!DOCTYPE html>
<html>
<head>

<link href="css/sty1.css" rel="stylesheet" type="text/css" >



</head>
<body>

<div>
<ul>
  <li><a href="#about">About</a></li>
  <li><a href="#login">login</a></li>
</ul>
</div>




<div class="containermain">


<img src="images/unique1.jpg" class="topimg">
     <div class="di1" >
       </br>
    <h1 class="h11">EDGE</h1>
      Our edge menu offers satisfying, gluten-free dinners for making low-carb lifestyles less complicated. Get started now.
                                                                                                          </br>
                                                                                                           </br>
    <h2 >Check out all our menus</h2>
                                                                                                           </br>
                                                                                                           </br>
    </div>




    <div >
   <img src="NSBM edge.png" alt="..." class="img2">
   <div >
    <h5>...</h5>
    <p>...</p>
   </div>


<?php
  $servername="localhost";
  $susername="root";
  $spassword="";
  $sdbname="nsbmedge";
// Create connection
$con = mysqli_connect("$servername", "$susername","$spassword", "$sdbname");
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>



<table  class="table1">
<tr>

    </tr>
    <tr>
<td class="divright">
sssssssss
</td>
<td>
<?php
$sql = "SELECT * FROM `foods`";
$result = mysqli_query($con, $sql);
?>

<table >

 <?php
if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = mysqli_fetch_assoc($result))
   {
      ?>
      
      <tr class="trclass1" >
      <td class="menutd1" > 
      <img src="uploads/<?php echo $row['fimage']; ?>"  class="img1">
      </td ><td class="td22">
      <?php
      echo " " . $row["fname"]. "</td> <td >  " . $row["fdescription"]. "</td>";
    
      echo "<td> " . $row["favailability"]. "</td> <td>  " . $row["price"]. "</td>";
      }
      echo "<tr ></br>";
    
      
  }

else
 {
  echo "0 results";
}
mysqli_close($con);
?>

    </tr>

    </table>


</div>






<script src="js/myScript1.js">
</script>

</body>
</html>