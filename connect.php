<?php
$servername = "localhost";
$username = "test";
$password = "1234";
$db="pizza_store";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 






$size=$_REQUEST["size"];
$topping=$_REQUEST["topping"];
$total=$_REQUEST["total"];
$address=$_REQUEST["address"];
$name=$_REQUEST["username"];
$email=$_REQUEST["email"];
$card=$_REQUEST["card"];
$sql = "INSERT INTO orders (size, topping, total,addresss,names,email,cards) VALUES ('$size','$topping','$total','$address','$name','$email','$card')";
if ($conn->query($sql) === TRUE) {
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();



?>
<!--HTML Content-->

<!DOCTYPE html>
<html>
<title>Pizza Store</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">Cart</a>
</nav>


<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    
    <div class="w3-center w3-padding-16">Order Your Favourite Pizza</div>
    
    
    <div class="w3-bar w3-light-grey">
  <a href="/pizza" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">View Orders</a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-shopping-cart"></i></a>
  
  
</div>

    
    
    
  </div>
</div><br>
  
<!-- !PAGE CONTENT! -->


<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

 <div class="w3-panel w3-green w3-round">
    <h3>Ordered Placed Successfully</h3>
    
  </div>
</div>
<?php
include "redirect.php";
?>



<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
<script src="app.js"></script>
</body>
</html>

