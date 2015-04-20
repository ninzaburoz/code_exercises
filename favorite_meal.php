<?php
	var_dump($_GET);
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Favorite Meal</title>
</head>
<body>
	<header>
		<h1>Sushi</h1>
	</header>
	<main>
		<h2>Ingredients</h2>
		<ol>
			<li>Rice</li>
			<li>Fresh Fish</li>
			<li>Sauces and seasonings</li>
		</ol>
		<form method="GET" Action="/favorite_meal.php">
			<p>
				<label for="suggestion">Give me some suggestions</label>
				<input id="suggestion" name="suggestion" type="text">
			</p>
			<p>
				<input type="submit" value="Send"></label>
			</p>
		</form>
	</main>
	<aside>
		<h3>Other Foods I like</h3>
		<ul>
			<li><a href="#" title="How to make Fried Rice">Fried Rice</a></li>
			<li><a href="#" title="how to make Miso Salmon">Miso Salmon</a></li>
			<li><a href="#" title="How to BBQ">BBQ'd anything</a></li>
		</ul>
	</aside>
</body>
</html>