<?php
if($_POST["firstcond"]) {
    mail("rdcollins15@gmail.com", "Form to email message", $_POST["firstcond"], "From: rcbballgirl015@aol.com");
}
?>

<!DOCTYPE html>

<script src="orderform.js"></script>
<link rel="stylesheet" type="text/css"
      href="//fonts.googleapis.com/css?family=Annie+Use+Your+Telescope" />
  <link href="order.css" rel="stylesheet">
 
  <body>
      <div class="nav" style="border-bottom: 2px solid #242222">
         			 <div class="navcenter">
          			  <a href="index.html">MAC Truck</a>
          			</div>
          			<div class="navright">
            			<ul>
            			  <li><a href="menu.html">Menu</a></li>
              				<li><a href="order.html">Order</a></li>
            			  	<li><a href="about.html">About</a></li>
             				<li><a href="contact-us.html">Contact Us</a></li>
            			</ul>
          			</div>
</div>
          	
<div class="theform">

<form Name="myform" method="post" action="contact.php">
      <h1> First choose some mac: </h1>
    <select NAME="macChoice" onChange="calculatePrice()" id="macChoice">
       <option value="0">Choose some mac:  (+$8.80)</option>
       <option value="8.80">Regular (Non-Organic)</option>
       <option value="8.80">Organic Whole Wheat</option>
       <option value="8.80">Organic Gluten Free</option>
    </select>
      <h1> Now Choose Up to Three FREE Condiments: </h1>
    <select NAME="firstCond" onChange="calculatePrice()" id="firstCond">
       <option value="0">Choose Your First Condiment</option>
       <option value="0">Chives</option>
       <option value="0">Maple Syrup</option>
       <option value="0">Ranch</option>
       <option value="0">Bell Peppers</option>
       <option value="0">Blueberries</option>
       <option value="0">Pizza Sauce</option>
       <option value="0">Corn</option>
       <option value="0">Fresh Thyme</option>
       <option value="0">Fresh Rosemary</option>
       <option value="0">Dorrito Pieces</option>
       <option value="0">Chocolate Chips</option>
       <option value="0">Buffalo Sauce</option>
       <option value="0">Apple Bits</option>
       <option value="0">Bread Crumbs</option>
       <option value="0">Sriracha</option>
       <option value="0">Chocolate Sauce</option>
       <option value="0">Peas</option>
       <option value="0">Mustard</option>
       <option value="0">BBQ Sauce</option>
       <option value="0">Lemon Juice</option>
       <option value="0">Tuna</option>
       <option value="0">Bacon Bits</option>
       <option value="0">Fried Chicken</option>
    </select>

    <select NAME="secondCond" onChange="calculatePrice()" id="secondCond">
       <option value="0">Choose Your Second Condiment: </option>
       <option value="0">Chives</option>
       <option value="0">Maple Syrup</option>
       <option value="0">Ranch</option>
       <option value="0">Bell Peppers</option>
       <option value="0">Blueberries</option>
       <option value="0">Pizza Sauce</option>
       <option value="0">Corn</option>
       <option value="0">Fresh Thyme</option>
       <option value="0">Fresh Rosemary</option>
       <option value="0">Dorrito Pieces</option>
       <option value="0">Chocolate Chips</option>
       <option value="0">Buffalo Sauce</option>
       <option value="0">Apple Bits</option>
       <option value="0">Bread Crumbs</option>
       <option value="0">Sriracha</option>
       <option value="0">Chocolate Sauce</option>
       <option value="0">Buffalo Sauce</option>
       <option value="0">Apple Bits</option>
       <option value="0">Bread Crumbs</option>
       <option value="0">Sriracha</option>
       <option value="0">Chocolate Sauce</option>
       <option value="0">Peas</option>
       <option value="0">Mustard</option>
       <option value="0">BBQ Sauce</option>
       <option value="0">Lemon Juice</option>
       <option value="0">Tuna</option>
       <option value="0">Bacon Bits</option>
       <option value="0">Fried Chicken</option>
    </select>
    
    <select NAME="thirdCond" onChange="calculatePrice()" id="thirdCond">
       <option value="0">Choose Your Third Condiment: </option>
       <option value="0">Chives</option>
       <option value="0">Maple Syrup</option>
       <option value="0">Ranch</option>
       <option value="0">Bell Peppers</option>
       <option value="0">Blueberries</option>
       <option value="0">Pizza Sauce</option>
       <option value="0">Corn</option>
       <option value="0">Fresh Thyme</option>
       <option value="0">Fresh Rosemary</option>
       <option value="0">Dorrito Pieces</option>
       <option value="0">Chocolate Chips</option>
       <option value="0">Buffalo Sauce</option>
       <option value="0">Apple Bits</option>
       <option value="0">Bread Crumbs</option>
       <option value="0">Sriracha</option>
       <option value="0">Chocolate Sauce</option>
       <option value="0">Buffalo Sauce</option>
       <option value="0">Apple Bits</option>
       <option value="0">Bread Crumbs</option>
       <option value="0">Sriracha</option>
       <option value="0">Chocolate Sauce</option>
       <option value="0">Peas</option>
       <option value="0">Mustard</option>
       <option value="0">BBQ Sauce</option>
       <option value="0">Lemon Juice</option>
       <option value="0">Tuna</option>
       <option value="0">Bacon Bits</option>
       <option value="0">Fried Chicken</option>
      </select>
      <h1>Add as many extra condiments you want (+$1 each)</h1>
    <select NAME="extraCond1" onChange="calculatePrice()" id="extraCond1">
       <option value="0">Choose an extra condiment: </option>
       <option value="1">Chives</option>
       <option value="1">Maple Syrup</option>
       <option value="1">Ranch</option>
       <option value="1">Bell Peppers</option>
       <option value="1">Blueberries</option>
       <option value="1">Pizza Sauce</option>
       <option value="1">Corn</option>
       <option value="1">Fresh Thyme</option>
       <option value="1">Fresh Rosemary</option>
       <option value="1">Dorrito Pieces</option>
       <option value="1">Chocolate Chips</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Peas</option>
       <option value="1">Mustard</option>
       <option value="1">BBQ Sauce</option>
       <option value="1">Lemon Juice</option>
       <option value="1">Tuna</option>
       <option value="1">Bacon Bits</option>
       <option value="1">Fried Chicken</option>
      </select>
      
       <select NAME="extraCond2" onChange="calculatePrice()" id="extraCond2">
       <option value="0">Choose an extra condiment: </option>
       <option value="1">Chives</option>
       <option value="1">Maple Syrup</option>
       <option value="1">Ranch</option>
       <option value="1">Bell Peppers</option>
       <option value="1">Blueberries</option>
       <option value="1">Pizza Sauce</option>
       <option value="1">Corn</option>
       <option value="1">Fresh Thyme</option>
       <option value="1">Fresh Rosemary</option>
       <option value="1">Dorrito Pieces</option>
       <option value="1">Chocolate Chips</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Peas</option>
       <option value="1">Mustard</option>
       <option value="1">BBQ Sauce</option>
       <option value="1">Lemon Juice</option>
       <option value="1">Tuna</option>
       <option value="1">Bacon Bits</option>
       <option value="1">Fried Chicken</option>
      </select>
      
       <select NAME="extraCond3" onChange="calculatePrice()" id="extraCond3">
       <option value="0">Choose an extra condiment: </option>
       <option value="1">Chives</option>
       <option value="1">Maple Syrup</option>
       <option value="1">Ranch</option>
       <option value="1">Bell Peppers</option>
       <option value="1">Blueberries</option>
       <option value="1">Pizza Sauce</option>
       <option value="1">Corn</option>
       <option value="1">Fresh Thyme</option>
       <option value="1">Fresh Rosemary</option>
       <option value="1">Dorrito Pieces</option>
       <option value="1">Chocolate Chips</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Peas</option>
       <option value="1">Mustard</option>
       <option value="1">BBQ Sauce</option>
       <option value="1">Lemon Juice</option>
       <option value="1">Tuna</option>
       <option value="1">Bacon Bits</option>
       <option value="1">Fried Chicken</option>
      </select>
      
       <select NAME="extraCond4" onChange="calculatePrice()" id="extraCond4">
       <option value="0">Choose an extra condiment: </option>
       <option value="1">Chives</option>
       <option value="1">Maple Syrup</option>
       <option value="1">Ranch</option>
       <option value="1">Bell Peppers</option>
       <option value="1">Blueberries</option>
       <option value="1">Pizza Sauce</option>
       <option value="1">Corn</option>
       <option value="1">Fresh Thyme</option>
       <option value="1">Fresh Rosemary</option>
       <option value="1">Dorrito Pieces</option>
       <option value="1">Chocolate Chips</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Peas</option>
       <option value="1">Mustard</option>
       <option value="1">BBQ Sauce</option>
       <option value="1">Lemon Juice</option>
       <option value="1">Tuna</option>
       <option value="1">Bacon Bits</option>
       <option value="1">Fried Chicken</option>
      </select>
      
       <select NAME="extraCond5" onChange="calculatePrice()" id="extraCond5">
       <option value="0">Choose an extra condiment: </option>
       <option value="1">Chives</option>
       <option value="1">Maple Syrup</option>
       <option value="1">Ranch</option>
       <option value="1">Bell Peppers</option>
       <option value="1">Blueberries</option>
       <option value="1">Pizza Sauce</option>
       <option value="1">Corn</option>
       <option value="1">Fresh Thyme</option>
       <option value="1">Fresh Rosemary</option>
       <option value="1">Dorrito Pieces</option>
       <option value="1">Chocolate Chips</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Peas</option>
       <option value="1">Mustard</option>
       <option value="1">BBQ Sauce</option>
       <option value="1">Lemon Juice</option>
       <option value="1">Tuna</option>
       <option value="1">Bacon Bits</option>
       <option value="1">Fried Chicken</option>
      </select>
      
       <select NAME="extraCond6" onChange="calculatePrice()" id="extraCond6">
       <option value="0">Choose an extra condiment: </option>
       <option value="1">Chives</option>
       <option value="1">Maple Syrup</option>
       <option value="1">Ranch</option>
       <option value="1">Bell Peppers</option>
       <option value="1">Blueberries</option>
       <option value="1">Pizza Sauce</option>
       <option value="1">Corn</option>
       <option value="1">Fresh Thyme</option>
       <option value="1">Fresh Rosemary</option>
       <option value="1">Dorrito Pieces</option>
       <option value="1">Chocolate Chips</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Peas</option>
       <option value="1">Mustard</option>
       <option value="1">BBQ Sauce</option>
       <option value="1">Lemon Juice</option>
       <option value="1">Tuna</option>
       <option value="1">Bacon Bits</option>
       <option value="1">Fried Chicken</option>
      </select>
      
      <h1>Thirsty? We have some amazing local and organic drinks to choose from: </h1>
     <select NAME="drink" onChange="calculatePrice()" id="drink">
           <option value="0">Choose a drink option: </option>
           <option value="3">Fresh Organic Orange Juice +$3</option>
           <option value="2">Organic Hot Chocolate +$2</option>
           <option value="2">Local Hot Apple Cider +$2</option>
           <option value="2">Organic Coffee +$2</option>
           <option value="2">Organic Tea +$2</option>
      </select>
      <button type="button" NAME="order2button" onClick="myFunction()" id="order2button">Still Hungry? Click here to add another order</button>
      <div id="secondOrder">
      <h1> Want some more mac? </h1>
      <select NAME="macChoice2" onChange="calculatePrice()" id="macChoice2">
       <option value="0">Choose some mac:  (+$8.80)</option>
       <option value="8.80">Regular (Non-Organic)</option>
       <option value="8.80">Organic Whole Wheat</option>
       <option value="8.80">Organic Gluten Free</option>
      </select>
        <h1> Now Choose Up to Three FREE Condiments: </h1>
    <select NAME="firstCond2" onChange="calculatePrice()" id="firstCond2">
       <option value="0">Choose Your First Condiment</option>
       <option value="0">Chives</option>
       <option value="0">Maple Syrup</option>
       <option value="0">Ranch</option>
       <option value="0">Bell Peppers</option>
       <option value="0">Blueberries</option>
       <option value="0">Pizza Sauce</option>
       <option value="0">Corn</option>
       <option value="0">Fresh Thyme</option>
       <option value="0">Fresh Rosemary</option>
       <option value="0">Dorrito Pieces</option>
       <option value="0">Chocolate Chips</option>
       <option value="0">Buffalo Sauce</option>
       <option value="0">Apple Bits</option>
       <option value="0">Bread Crumbs</option>
       <option value="0">Sriracha</option>
       <option value="0">Chocolate Sauce</option>
       <option value="0">Peas</option>
       <option value="0">Mustard</option>
       <option value="0">BBQ Sauce</option>
       <option value="0">Lemon Juice</option>
       <option value="0">Tuna</option>
       <option value="0">Bacon Bits</option>
       <option value="0">Fried Chicken</option>
    </select>

    <select NAME="secondCond2" onChange="calculatePrice()" id="secondCond2">
       <option value="0">Choose Your Second Condiment: </option>
       <option value="0">Chives</option>
       <option value="0">Maple Syrup</option>
       <option value="0">Ranch</option>
       <option value="0">Bell Peppers</option>
       <option value="0">Blueberries</option>
       <option value="0">Pizza Sauce</option>
       <option value="0">Corn</option>
       <option value="0">Fresh Thyme</option>
       <option value="0">Fresh Rosemary</option>
       <option value="0">Dorrito Pieces</option>
       <option value="0">Chocolate Chips</option>
       <option value="0">Buffalo Sauce</option>
       <option value="0">Apple Bits</option>
       <option value="0">Bread Crumbs</option>
       <option value="0">Sriracha</option>
       <option value="0">Chocolate Sauce</option>
       <option value="0">Buffalo Sauce</option>
       <option value="0">Apple Bits</option>
       <option value="0">Bread Crumbs</option>
       <option value="0">Sriracha</option>
       <option value="0">Chocolate Sauce</option>
       <option value="0">Peas</option>
       <option value="0">Mustard</option>
       <option value="0">BBQ Sauce</option>
       <option value="0">Lemon Juice</option>
       <option value="0">Tuna</option>
       <option value="0">Bacon Bits</option>
       <option value="0">Fried Chicken</option>
    </select>
    
    <select NAME="thirdCond2" onChange="calculatePrice()" id="thirdCond2">
       <option value="0">Choose Your Third Condiment: </option>
       <option value="0">Chives</option>
       <option value="0">Maple Syrup</option>
       <option value="0">Ranch</option>
       <option value="0">Bell Peppers</option>
       <option value="0">Blueberries</option>
       <option value="0">Pizza Sauce</option>
       <option value="0">Corn</option>
       <option value="0">Fresh Thyme</option>
       <option value="0">Fresh Rosemary</option>
       <option value="0">Dorrito Pieces</option>
       <option value="0">Chocolate Chips</option>
       <option value="0">Buffalo Sauce</option>
       <option value="0">Apple Bits</option>
       <option value="0">Bread Crumbs</option>
       <option value="0">Sriracha</option>
       <option value="0">Chocolate Sauce</option>
       <option value="0">Buffalo Sauce</option>
       <option value="0">Apple Bits</option>
       <option value="0">Bread Crumbs</option>
       <option value="0">Sriracha</option>
       <option value="0">Chocolate Sauce</option>
       <option value="0">Peas</option>
       <option value="0">Mustard</option>
       <option value="0">BBQ Sauce</option>
       <option value="0">Lemon Juice</option>
       <option value="0">Tuna</option>
       <option value="0">Bacon Bits</option>
       <option value="0">Fried Chicken</option>
      </select>
      <h1>Add as many extra condiments you want (+$1 each)</h1>
    <select NAME="extraCond12" onChange="calculatePrice()" id="extraCond12">
       <option value="0">Choose an extra condiment: </option>
       <option value="1">Chives</option>
       <option value="1">Maple Syrup</option>
       <option value="1">Ranch</option>
       <option value="1">Bell Peppers</option>
       <option value="1">Blueberries</option>
       <option value="1">Pizza Sauce</option>
       <option value="1">Corn</option>
       <option value="1">Fresh Thyme</option>
       <option value="1">Fresh Rosemary</option>
       <option value="1">Dorrito Pieces</option>
       <option value="1">Chocolate Chips</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Peas</option>
       <option value="1">Mustard</option>
       <option value="1">BBQ Sauce</option>
       <option value="1">Lemon Juice</option>
       <option value="1">Tuna</option>
       <option value="1">Bacon Bits</option>
       <option value="1">Fried Chicken</option>
      </select>
      
       <select NAME="extraCond22" onChange="calculatePrice()" id="extraCond22">
       <option value="0">Choose an extra condiment: </option>
       <option value="1">Chives</option>
       <option value="1">Maple Syrup</option>
       <option value="1">Ranch</option>
       <option value="1">Bell Peppers</option>
       <option value="1">Blueberries</option>
       <option value="1">Pizza Sauce</option>
       <option value="1">Corn</option>
       <option value="1">Fresh Thyme</option>
       <option value="1">Fresh Rosemary</option>
       <option value="1">Dorrito Pieces</option>
       <option value="1">Chocolate Chips</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Peas</option>
       <option value="1">Mustard</option>
       <option value="1">BBQ Sauce</option>
       <option value="1">Lemon Juice</option>
       <option value="1">Tuna</option>
       <option value="1">Bacon Bits</option>
       <option value="1">Fried Chicken</option>
      </select>
      
       <select NAME="extraCond32" onChange="calculatePrice()" id="extraCond32">
       <option value="0">Choose an extra condiment: </option>
       <option value="1">Chives</option>
       <option value="1">Maple Syrup</option>
       <option value="1">Ranch</option>
       <option value="1">Bell Peppers</option>
       <option value="1">Blueberries</option>
       <option value="1">Pizza Sauce</option>
       <option value="1">Corn</option>
       <option value="1">Fresh Thyme</option>
       <option value="1">Fresh Rosemary</option>
       <option value="1">Dorrito Pieces</option>
       <option value="1">Chocolate Chips</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Peas</option>
       <option value="1">Mustard</option>
       <option value="1">BBQ Sauce</option>
       <option value="1">Lemon Juice</option>
       <option value="1">Tuna</option>
       <option value="1">Bacon Bits</option>
       <option value="1">Fried Chicken</option>
      </select>
      
       <select NAME="extraCond42" onChange="calculatePrice()" id="extraCond42">
       <option value="0">Choose an extra condiment: </option>
       <option value="1">Chives</option>
       <option value="1">Maple Syrup</option>
       <option value="1">Ranch</option>
       <option value="1">Bell Peppers</option>
       <option value="1">Blueberries</option>
       <option value="1">Pizza Sauce</option>
       <option value="1">Corn</option>
       <option value="1">Fresh Thyme</option>
       <option value="1">Fresh Rosemary</option>
       <option value="1">Dorrito Pieces</option>
       <option value="1">Chocolate Chips</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Peas</option>
       <option value="1">Mustard</option>
       <option value="1">BBQ Sauce</option>
       <option value="1">Lemon Juice</option>
       <option value="1">Tuna</option>
       <option value="1">Bacon Bits</option>
       <option value="1">Fried Chicken</option>
      </select>
      
       <select NAME="extraCond52" onChange="calculatePrice()" id="extraCond52">
       <option value="0">Choose an extra condiment: </option>
       <option value="1">Chives</option>
       <option value="1">Maple Syrup</option>
       <option value="1">Ranch</option>
       <option value="1">Bell Peppers</option>
       <option value="1">Blueberries</option>
       <option value="1">Pizza Sauce</option>
       <option value="1">Corn</option>
       <option value="1">Fresh Thyme</option>
       <option value="1">Fresh Rosemary</option>
       <option value="1">Dorrito Pieces</option>
       <option value="1">Chocolate Chips</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Peas</option>
       <option value="1">Mustard</option>
       <option value="1">BBQ Sauce</option>
       <option value="1">Lemon Juice</option>
       <option value="1">Tuna</option>
       <option value="1">Bacon Bits</option>
       <option value="1">Fried Chicken</option>
      </select>
      
       <select NAME="extraCond62" onChange="calculatePrice()" id="extraCond62">
       <option value="0">Choose an extra condiment: </option>
       <option value="1">Chives</option>
       <option value="1">Maple Syrup</option>
       <option value="1">Ranch</option>
       <option value="1">Bell Peppers</option>
       <option value="1">Blueberries</option>
       <option value="1">Pizza Sauce</option>
       <option value="1">Corn</option>
       <option value="1">Fresh Thyme</option>
       <option value="1">Fresh Rosemary</option>
       <option value="1">Dorrito Pieces</option>
       <option value="1">Chocolate Chips</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Buffalo Sauce</option>
       <option value="1">Apple Bits</option>
       <option value="1">Bread Crumbs</option>
       <option value="1">Sriracha</option>
       <option value="1">Chocolate Sauce</option>
       <option value="1">Peas</option>
       <option value="1">Mustard</option>
       <option value="1">BBQ Sauce</option>
       <option value="1">Lemon Juice</option>
       <option value="1">Tuna</option>
       <option value="1">Bacon Bits</option>
       <option value="1">Fried Chicken</option>
      </select>
      
      <h1>Thirsty? We have some amazing local and organic drinks to choose from: </h1>
     <select NAME="drink2" onChange="calculatePrice()" id="drink2">
           <option value="0">Choose a drink option: </option>
           <option value="3">Fresh Organic Orange Juice +$3</option>
           <option value="2">Organic Hot Chocolate +$2</option>
           <option value="2">Local Hot Apple Cider +$2</option>
           <option value="2">Organic Coffee +$2</option>
           <option value="2">Organic Tea +$2</option>
      </select>
      </div>
      <input type="submit" name="submit">
</form>

<p id="totallabel">Total: $<output type="text" id="PicExtPrice" Size="8"></p>

</div>
   
     </body>
