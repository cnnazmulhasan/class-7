<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <form action="./process.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" >
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" >
            </div>
            <div class="form-group">
                <label for="number">Number:</label>
                <input type="text" id="number" name="number" >
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" id="password" name="password" >
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" ></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn">
            </div>
        </form>
    </div>
</body>
</html><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nazmul Hasan</title>
</head>

<body>
	
	<form action="./datastore.php" method="POST">
	<table>

		<tr><td>Name: </td><td><input type="text" placeholder="enter your name" name="Name" autofocus required></td></tr>
		<tr><td>E-mail: </td><td><input type="mail" placeholder="enter your email" name="Email"></td></tr>
		<tr><td>Password: </td><td><input type="password" name="Password" pattern=[0-9]{4,7} required></td></tr>
		<tr><td>Gender: </td><td><input type="radio" name="gen">Male <input type="radio" name="gen">Female </td></tr>
        <tr><td>Address: </td><td><input type="text" name="Address"></td></tr>
		<tr><td></td><td><input type="submit" value="Register"> </td></tr>

	</table>
	</form>

</body>
</html>