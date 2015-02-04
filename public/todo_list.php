<?php 
	var_dump($_POST)
 ?>

 <!DOCTYPE html>
<html>
	<head>
		<title>TODO List</title>
	</head>
	<body>
		<h1>TODO List</h1>
		<ul>This is what i have to do today
			<li>Go to School</li>
			<li>Pick up Son from KG</li>
			<li>Get lunch together</li>
			<li>Get back to Work</li>
		</ul>
        <h2>Optional Activities</h2>
		<form method="POST" action="/todo_list.php">
			<label for="place_for _dinner">Where can we go for Dinner</label>
			<input id="place_for_dinner" name="place_for_dinner" type="text">
			<p>
			<label for="suggestions">May i Suggest you?</label>
			<select id="suggestions" name="suggestions">
				<option>Guajillos</option>
				<option>Pico de Gallo</option>
				<option>Tommy's</option>
			</select>
			</p>
		<p><input type="submit" value="Send it"></p>
		</form>
	</body>
</html>
