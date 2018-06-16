
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
  <a href="/pizza/vieworder.php" class="w3-bar-item w3-button">View Orders</a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-shopping-cart"></i></a>
  
  
</div>

    
    
    
  </div>
</div><br>
  
<!-- !PAGE CONTENT! -->

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">


  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="12.jpg" alt="Sandwich" style="width:100%">
      <h2>Pepperoni</h2>
      <h3>A Real NYC Classic</h3>
      <!--Topping Selection-->
      
    </div>
    <div class="w3-quarter">
      <img src="2.png" alt="Steak" style="width:100%">
      <h2>Margerita</h2>
      <h3>A Real NYC Classic</h3>
      
    </div>
    <div class="w3-quarter">
      <img src="3.jpg" alt="Cherries" style="width:100%">
      <h2>Veggie Delight</h2>
      <h3>A Real NYC Classic</h3>

    </div>
    <div class="w3-quarter">
      <img src="4.jpg" alt="Pasta and Wine" style="width:100%">
      <h2>Veggie Special</h2>
      <h3>A Real NYC Classic</h3>
      
    </div>
  </div>
  <!-- End page content -->
</div>

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
<form action="summary.php" method="post" id="pizzaForm" class="w3-container">

<fieldset>
    
    
    <p>Select Pizza Size and Toppings</p>
    
    <p>
        <select name="pizza" class ="w3-select" id="piz">
            <option value="pepperoni">Pepperoni</option>
            <option value="margarita">Margarita</option>
            <option value="veggieDelight">Veggie Delight</option>
            <option value="veggiespecial">Veggie Special</option>

        </select>
        <select name="size" class ="w3-select"  id="size">
            <option value="5">Small: $5</option>
            <option value="8" selected="selected">Medium: $8</option>
            <option value="12">Large: $12</option>
        </select>
        
        
        
        <select name="toppings" id="toppings" class ="w3-select"  multiple="multiple" size="5">
        
            <option value=".40">Mushrooms</option>
            <option value=".30">Onions</option>
            <option value=".40">Black Olives</option>
            <option value=".50">Sausage</option>
            <option value=".60">Pepperoni</option>
        </select>
        <input type="hidden" name="toppings_tot" value="0" />
     
        <label>Total: $<input type="text" class="num" name="total" value="8.00" readonly="readonly" /></label>
    </p>
    
</fieldset><br>
<center><button class="w3-button w3-blue">Submit</button></center>

</form>
</div>

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
