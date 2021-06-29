<?php session_start() ?>
<!doctype html>
<html lang="en-UK">
<head>
<title>Upgrade Profile | MauriShop</title>
</head>
<body>

<!--Upgrading Profile-->

  <div class ="grid_10">
     <div class = "box round first">
	    <h2> 
		   Welcome! 
		</h2>
		
	    <div class = "block">
		  
		  <form name = "form1" action="" method = "post">
		    <table>
		     <tr>
		      <td>First Name</td>
		      <td><input type ="text" name ="firstname"  pattern = "([A-Z]+ [A-Z]+|[A-Z]+|[A-Z]+ )" title ="First Name should be in CAPITAL and contains only alphabets" required></td>
		     </tr>
		  
		     <tr>
		      <td>Last Name</td>
		      <td><input type ="text" name ="lastname" pattern = "([A-Z]+ [A-Z]+|[A-Z]+|[A-Z]+ )" title ="Last Name should be in CAPITAL and contains only alphabets" required></td>
		     </tr>
			 
			 
		     <tr>
		      <td>Email Address</td>
		      <td><input type="email" name ="emailadd" pattern = "[a-z0-9._%$+-]+@[a-z0-9.-]+\.[a-z]{2,}" title = "The 
				required pattern should be [a-z0-9._%$+-]+@[a-z0-9.-]+\.[a-z]{2,}" required></td> 
		     </tr>
		  
			 
		     <tr>
		      <td>Address</td>
		      <td><input type ="address" name="address" pattern ="[a-zA-Z0-9]+" title = "It should be in an address format" required></td>
		     </tr> 
		  
		     <tr>
		      <td>Shipping Address</td>
		      <td><input type="address" name ="shipadd"  pattern ="[a-zA-Z0-9]+" title = "It should be in an address format" required></td> 
		     </tr>
		  
		     
		     <tr>
		      <td>Card Category</td>
			  <td>
		      <select name ="cardcat">
		       <option>Paypal</option>
		       <option>MasterCard</option>
		       <option>MaestroCard</option>
		      </select>
		      </td>
		     </tr>
			 
			 <tr>
			<!--SA BOUT LA PAS P BON-->
		      <td>Card Number</td>
		      <td><input type="tel" inputmode="numeric" placeholder="xxxx xxxx xxxx xxxx" pattern ="[0-9]+" size ="16" title ="Numeric values only" required  ></td>
		     </tr>
		  
			 
		     <td colspan ="2" align = "cener"><input type = submit name = submit1 value= Update </td>
		     </tr>
		    </table>
		 </form>
		  
	</body> 