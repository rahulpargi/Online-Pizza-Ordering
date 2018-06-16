<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body>
Your Pizza is :<?php echo $_GET["pizza"]; ?><br>
Your Total is: <?php echo $_GET["total"]; ?>
<?php 
$size=$_GET["size"];
$topping=$_GET['toppings'];?><br>
Your size is :<?php
if($size==8){
    echo 'Medium';
}else if($size==5){
    echo 'Small';
}else if($size==12){
    echo 'Small';
}
?><br>
Your Toppings are :<?php

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

?>



    
</body>
</html>
