<?php
	var_dump($_POST);
?>
<!DOCTYPE html>
<head>
	<title>My First Form</title>
	<link rel="stylesheet" href="site.css"
</head>

<body>
	<h2>User Login</h2>
		<form method="POST" action="/my_first_form.php">
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="Your Email">
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="Your Bank Account">
			</p>
			<p>
				<Button type="submit">Onward!</button>
			</p>
		</form>	
	<h2>Compose an Email</h2>
		<form method="POST" action="/my_first_form.php">
			<p>
				<label for="from">From:</label>
				<input id="from" name="from" type="text">
			</p>
			<p>
				<label for="to">To:</label>
				<input id="to" name="to" type="text">
			</p>
			<p>
				<label for="subject">Subject:</label>
				<input id="subject" name="subject" type="text">
			</p>
			<p>
				<textarea id="email_body" name="email_body" rows="10" Cols="70" placeholder="compose your email here."></textarea>
			</p>
			<p>
				<label for="mailing_list">Save a copy to my Sent Box</label>
				<input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked="checked">	
			</p>
			<p>
				<button type="submit">Send</button>
			</p>
		</form>
	<h2>Multiple Choice Test</h2>
		<form method="POST" action="/my_first_form.php">
			<p>
				<strong>1. In September ______, the W3C proposed a plan to release a stable HTML5 Recommendation by the end of 2014.</strong>
			</p>
				<label><input type="radio" name="question1" Value="2011">2011</label><br>
				<label><input type="radio" name="question1" Value="2012">2012</label><br>
				<label><input type="radio" name="question1" Value="2013">2013</label><br>
				<label><input type="radio" name="question1" value="2014">2014</label>
			<p>
				<label for="Internet_year"><strong>2. What year was the internet founded?</strong></label>
			</p>
				<select id="internet_year" name="internet_year []" multiple>
					<option value="0">1990</option>
					<option value="0">1991</option>
					<option value="1">1992</option>
					<option value="0">1993</option>
				</select>
			<p>
				<strong>3. Which websites do you visit often?</strong>
			</p>
				<input type="checkbox" id="google" name="site_used1" value="google">
				<label for="google">Google</label><br>
				<input type="checkbox" id="reddit" name="site_used2" value="Reddit">
				<label for="reddit">Reddit</label><br>
				<input type="checkbox" id="facebook" name="site_used3" value="facebook">
				<label for="facebook">Facebook</label><br>
			<p>
				<button type="submit">Submit</button>
			</p>
		</form>
		<h2>Select Testing</h2>	
			<form method="POST" action="/my_first_form.php">
				<p>
					<label for="narnia">
						Have you ever tried to walk through your wardrobe to see if Narnia was on the other side?
					</label>
				</p>
					<select id="narnia" name="narnia">
						<option value="1" selected>yes</option>
						<option value="0">No</option>
					</select>
							<p>
					<label for="pavement">Have you ever avoided the cracks in the pavement just for fun?</label>
				</p>
					<select id="pavement" name="Pavement">
						<option value="1" selected>yes</option>
						<option value="0">No</option>
					</select>
				<p>
					<button type="submit">Submit</button>
				</p>
			</form>
</body>
</html>