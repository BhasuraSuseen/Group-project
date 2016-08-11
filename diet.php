<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://localhost/FrontendCSS.css">
</head>
<body>
<div id="header">
<h1>HOMS</h1>
</div>
<div id="icbar">
</div>

<section class="container">
  
    <div class="left-half ">
      <h1>Current Menu</h1>
	  
      <form method="post" action=diet.php>
		<table align = "center">
		<tr><td>DATE</td><td><input type="date" name="date" placeholder="Date" width=100%></td><tr>
		<tr><td><input type="text" name="ward" placeholder="Ward"></td><td><input type="number_format" name="count" placeholder="Count"></td>
		<td><select name="meal" placeholder="Meal">
	<option>Breakfast</option>
	<option>Lunch</option>
	<option>Dinner</option>
	</select></td><td><input type="text" name="menu_id" placeholder="Menu ID"></td></tr>
	<tr><td><input type="text" name="ward" placeholder="Ward"></td><td><input type="number_format" name="count" placeholder="Count"></td>
		<td><select name="meal" placeholder="Meal">
	<option>Breakfast</option>
	<option>Lunch</option>
	<option>Dinner</option>
	</select></td><td><input type="text" name="menu_id" placeholder="Menu ID"></td></tr>
	<tr><td><input type="text" name="ward" placeholder="Ward"></td><td><input type="number_format" name="count" placeholder="Count"></td>
		<td><select name="meal" placeholder="Meal">
	<option>Breakfast</option>
	<option>Lunch</option>
	<option>Dinner</option>
	</select></td><td><input type="text" name="menu_id" placeholder="Menu ID"></td></tr>
	<tr><td><input type="text" name="ward" placeholder="Ward"></td><td><input type="number_format" name="count" placeholder="Count"></td>
		<td><select name="meal" placeholder="Meal">
	<option>Breakfast</option>
	<option>Lunch</option>
	<option>Dinner</option>
	</select></td><td><input type="text" name="menu_id" placeholder="Menu ID"></td></tr>
	<tr><td><input type="text" name="ward" placeholder="Ward"></td><td><input type="number_format" name="count" placeholder="Count"></td>
		<td><select name="meal" placeholder="Meal">
	<option>Breakfast</option>
	<option>Lunch</option>
	<option>Dinner</option>
	</select></td><td><input type="text" name="menu_id" placeholder="Menu ID"></td></tr>
	<tr><td colspan=4 align="center"><button CLASS="button button2">Calculate</button><td></tr>
	
	<tr><td>FOOD ITEM</td><td>AMOUNT</td></tr>
	<tr><td><input type="text" name="food item" placeholder="food item"></td><td><input type="number_format" name="amount" placeholder="amount"></td></tr>
	<tr><td><input type="text" name="food item" placeholder="food item"></td><td><input type="number_format" name="amount" placeholder="amount"></td></tr>
	<tr><td><input type="text" name="food item" placeholder="food item"></td><td><input type="number_format" name="amount" placeholder="amount"></td></tr>
	<tr><td><input type="text" name="food item" placeholder="food item"></td><td><input type="number_format" name="amount" placeholder="amount"></td></tr>
	<tr><td><input type="text" name="food item" placeholder="food item"></td><td><input type="number_format" name="amount" placeholder="amount"></td></tr>
	<tr><td colspan=4 align="center"><button CLASS="button button2" >Save</button><td></tr>
	
		</table>
		
  
  <button CLASS="button button2" align="right" width=100%>Create Food Menu</button>
  </div>
</section>



</body>
</html>