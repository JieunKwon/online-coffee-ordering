	<!--
		///////////////////////////////////////////////////////////////////////////////////////
		// Tim Hortons Ordering Coffee

		// current page : confirm.php 
		// page task : 
		//	1. Calculate cost
		//	2. print coffee image according to the cup size
		//	3. print image of sugar and cream

		// Written by : Jieun Kwon
		// Written Date : March 18, 2018
		// updated Date : March 18, 2018
		// 
		// **related page**
		// index.html - order form 
		// confirm.php - order confirmation
		// scripts/formchk.js - all javascript code
		// css/main.css - all css 
		///////////////////////////////////////////////////////////////////////////////////////
-->

<?php

		// form method check
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			
			// validation : the quantity of coffee 
			if(!empty($_POST['qty']) && !empty($_POST['qty']) >0 ){
				
				// variables: get value from Form
				$qty = $_POST['qty'];		// quantity of coffee
				$size = $_POST['size'];		// cup size
				$sugar = $_POST['sugar'];	// sugar option
				$cream = $_POST['cream'];	// cream option
				$cost = 0;					// total cost
				$coffee_img = "";			// for printing image tag 
				 
				/* cost reference by Tim Hortons
				Small  $1.59 
				Medium $1.79 
				Large  $1.99 
				Extra Large $2.19
				*/
				// the cost of coffee and image tag
				if($size == "s"){
					$cost = 1.59;
					$coffee_img =  "<img src='images/original.png' width='30'>";
				}else if($size == "m"){
					$cost = 1.79;
					$coffee_img = "<img src='images/original.png' width='50'>";
				}else if($size == "l"){
					$cost = 1.99;
					$coffee_img = "<img src='images/original.png' width='70'>";
				}else if($size == "xl"){
					$cost = 2.19;
					$coffee_img = "<img src='images/original.png' width='90'>";
				}
				// total cost
				$cost = $cost * $qty;
				
				// check sugar and add image tag
				if( $sugar > 0 ){ 
					// add plus(+) image tag
					$coffee_img = $coffee_img. " <img src='images/plus2.jpg' width='30'> ";
					 
					// add sugar image tag
					for($i = 0; $i < $sugar; $i++){
						$coffee_img = $coffee_img. "<img src='images/sugar.jpg' width='50'>";
					}	
				}
				
				// check cream and add image tag
				if( $cream > 0){
					// add plus(+) image tag
					$coffee_img = $coffee_img. " <img src='images/plus2.jpg' width='30'> ";
					 
					// add cream image tag
					for($i = 0; $i < $cream; $i++){
						$coffee_img = $coffee_img. "<img src='images/cream.jpg' width='50'>";
					}					
				} 
				 
			} 
		}		
	 
			 
?>
 
<html>
	<head>
		<title>Tim Hortons</title> 
		
		<!-- style sheet -->
		<link href = "css/main.css" type = "text/css" rel = "stylesheet"/> 
	</head>
	<body >
	<!-- Heading -->
	 
		  <form name="timhortons" action="confirm.php" method="post">
		  <table border="0" align="center" >
			 <tr>
				<td > 
					<img src="images/logo.png" width="450">
				</td> 
			</tr>
		</table>
		 <table border="0" align="center" class="tbl_main">
			 <tr>
				<td height="20" align="center" > <h2> Order Confirmation</h2> 
				</td> 
			</tr>  
			<tr>
				<td height="30" align="cener" class="tbl_td2"> 
				<!-- Image Print: coffee, sugar, and cream -->				
				<?php
				for($i = 0; $i < $qty; $i++){ 
					echo  $coffee_img. "<br>";
				} 
				?> 
				</td> 
			</tr>
			<tr>
				<td height="20" align="center"> 
					<table class="tbl_inside" border="0" width="350">
						<tr>
							<td height="60" class="tbl_td2"> 
								<!-- Pring total cost : cost + tax -->								
								<?php
									echo "Coffee: $". $cost;
									echo " + Tax: $". round(($cost * 0.18),2)  ." <br><font color='#CC723D'>Total Cost: $". round(($cost * 1.18),2) ."</font>";
								?>								
							</td> 
						</tr>
					</table>
				</td> 
			</tr>  
			<!-- Buttons --> 
			<tr>
				<td height="40" align="center" >  
					 <input type = "button" value="Cancel" class="bt_general" name="btn_reset" onclick="window.location.href = 'index.html';"> 
					 <input type = "button" value="Confirm" class="bt_general" name="btn_submit" onclick="javascript:form_confirm();">
				</td>
			</tr>
			
		<!-- END: Buttons -->
			<tr>
				<td height="10"  > </td>
			</tr>
		</table>
		</form>
		<!-- Extenal script --> 
		<script src="scripts/formchk.js"></script>
		<!-- Foot Image -->
		<div >
			<img src="images/bg2.jpg" width="450" />
		</div>
		
	</body>
</html>
		
