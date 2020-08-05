<!DOCTYPE html>
<html>
<head>
	<title>Sign Up SanberBook</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<b>Sign Up Form</b>
	<form action="selamatdatang" method="POST">
		@csrf
		<p><label for="firstname">First Name :</label></p>
		<input type="text" id="firstname" name="firstname">
		<p>
		<label for="lastname">Last Name :</label></p>
		<input type="text" id="lastname" name="lastname">
		
		<p><label>Gender</label></p>
		<input type="radio" name="gender" value="0">Male<br>
		<input type="radio" name="gender" value="1">Female<br>
		<input type="radio" name="gender" value="2">Other<br>

		<p><label>Nationality</label></LI></p>
		<select>
			<option value="Indonesian">Indonesian</option>
			<option value="Malaysian">Malaysian</option>
			<option value="American">American</option>
			<option value="Chiness">Chiness</option>
		</select>

		<p><label>Language Spoken:</label></p>
		<input type="checkbox" name="language">Bahasa Indonesia<br>
		<input type="checkbox" name="language">English<br>
		<input type="checkbox" name="language">Other

		<p><label for="bio">Bio: </label></p>
		<textarea id="bio" cols="30" rows="8" name="bio"></textarea><br>
		<input type="submit" value="Sign Up">
	</form>

</body>
</html>