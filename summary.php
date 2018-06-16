
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

<center><h1>Your Order Summary</h1></center>
<div id="divCheckbox" >
           
</div>
<table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey">
        <th>Pizza</th>
        <th>Size</th>
        <th>Toppings</th>
        <th>Total</th>
      </tr>
    </thead>
    <tr>
      <td><?php echo $_REQUEST["pizza"]; ?><br></td>
      <td>
      <?php 
        $size=$_REQUEST["size"];
        $topping=$_REQUEST['toppings'];?>
        <?php
        if($size==8){
            echo 'Medium';
        }else if($size==5){
            echo 'Small';
        }else if($size==12){
            echo 'Large';
        }
    ?>
</td>
      <td><?php

if($topping==0.40){
    echo 'Mushroom';
}else if($topping==0.30){
    echo 'Onions';
}else if($topping==0.40){
    echo 'Black Olives';
}else if($topping==0.50){
    echo 'Sausage';
}else if($topping==0.60){
    echo 'Pepperoni';
}

?></td>
      <td><?php echo $_REQUEST["total"]; ?></td>
      
    </tr>
   
  </table><br>
  
  <!--button class="w3-button w3-teal" onclick="location.href='/checkout'">Check Out</button><br-->
  
  <div class="w3-container">
  
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Check Out</button>
  <form class="w3-container" action="/pizza/connect.php" method="post">

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        
      </div>

      
        <div class="w3-section">
       
        <h3>Enter Payment Information</h3>
        <div id="divCheckbox" style="display: none;">
        
           <input type="text" name="size" value="<?php echo $size?>">
           <input type="text" name="topping" value="<?php

                                                        if($topping==0.40){
                                                            echo 'Mushroom';
                                                        }else if($topping==0.30){
                                                            echo 'Onions';
                                                        }else if($topping==0.40){
                                                            echo 'Black Olives';
                                                        }else if($topping==0.50){
                                                            echo 'Sausage';
                                                        }else if($topping==0.60){
                                                            echo 'Pepperoni';
                                                        }

                                                        ?>">
           <input type="text" name="total" value="<?php echo $_REQUEST["total"]; ?>">
           <input type="text" name="size" value="<?php
                                                    if($size==8){
                                                        echo 'Medium';
                                                    }else if($size==5){
                                                        echo 'Small';
                                                    }else if($size==12){
                                                        echo 'Large';
                                                    }
                                                ?>">
 
        </div>

          <label><b>Name</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
          <label><b>Address</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Address" name="address" required>
          <label><b>Email id</b></label>
          <input class="w3-input w3-border" type="email" placeholder="abc@cde.com" name="email" required>
          <label><b>Card No</b></label>
          <input class="w3-input w3-border" type="text" placeholder="xxxx-xxxx-xxxx-xxxx" name="card" required>
          <br>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" onclick="alert('Order Placed Successfully')">Place</button>

          
        </div>
     

      

    </div>
  </div>
</div>

</div>
      </div>
    </div>
  </div>
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

