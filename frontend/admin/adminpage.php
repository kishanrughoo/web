<!doctype html>
<html lang="en-UK">
<head>
<title>Admin | MauriShop</title>
</head>
<body>

  <div class ="grid_10">
     <div class = "box round first">
	    <h2> 
		   Add product 
		</h2>
		
	    <div class = "block">
		  
		  <form name = "form1" action="../../backend/upload/upload.php" method = "post" enctype= "multipart/form-data">
		    <table>
				<tr>
					<td>Product Name</td>
					<td><input type ="text" name ="prodname"></td>
				</tr>
			
				<tr>
					<td>Product Price</td>
					<td><input type ="text" name="prodprice"></td>
				</tr> 
				<tr>
					<td>Product Size</td>
					<td><input type ="text" name="prodsize"></td>
				</tr>
				<tr>
					<td>Product Quantity</td>
					<td><input type="text" name ="prodqty"></td> 
				</tr>
			
				<tr>
					<td>Product Image</td>
					<td><input type ="file" name ="prodimg"></td>
				</tr>
		  
				<tr>
					<td>Product Category</td>
				
					<td>
						<select name ="prodcat">
						<option>101.Men T-shirt</option>
						<option>109.Women T-shirt</option>
						<option>102.Men Shirt</option>
						<option>107.Women Dress</option>
						<option>103.Men Hoodie</option>
						<option>110.Women Hoodie</option>
						<option>104.Men Jacket</option>   
						<option>111.Women Jacket</option>
						<option>105.Men Jeans</option>
						<option>112.Women Jeans</option>
						<option>106.Men Shorts</option>
						<option>113.Women Shorts</option>
						<option>108.Women Skirts</option>
						</select>
					</td>
				</tr>
			 
				<tr>
					<td colspan ="2" aligne = "center"><input type = submit name = submit1 value= Upload ></td>
				</tr>
		    </table>
		 </form>
		  
	</body> 