<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Output 1</title>

<style>
body{
    font-family: Arial;
    background:#f4f4f4;
}

h1{
    text-align:center;
}

fieldset{
    width:500px;
    margin:auto;
    margin-top:20px;
    padding:20px;
    background:white;
    border-radius:8px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.1);
}

table{
    width:100%;
}

input, textarea{
    width:100%;
    padding:6px;
}

.btn{
    width:120px;
}
</style>

</head>
<body>

<h1>PHP Output No. 1</h1>

<!-- GET FORM -->
<fieldset>
<legend>This form uses GET request</legend>

<form action="redirect.php" method="GET">

<table>

<tr>
<td>First Name</td>
<td><input type="text" name="fname" required></td>
</tr>

<tr>
<td>Middle Name</td>
<td><input type="text" name="mname" required></td>
</tr>

<tr>
<td>Last Name</td>
<td><input type="text" name="lname" required></td>
</tr>

<tr>
<td>Age</td>
<td><input type="number" name="age" min="1" max="120" required></td>
</tr>

<tr>
<td>Gender</td>
<td>
<input type="radio" name="gender" value="Male" required> Male
<input type="radio" name="gender" value="Female"> Female
</td>
</tr>

<tr>
<td>Email</td>
<td><input type="email" name="email" required></td>
</tr>

<tr>
<td>Address</td>
<td><textarea name="address" required></textarea></td>
</tr>

<tr>
<td>Contact Number</td>
<td>
<input type="tel" name="contact"
pattern="[0-9]{11}"
placeholder="11 digit number"
required>
</td>
</tr>

<tr>
<td></td>
<td>
<input class="btn" type="submit" value="Submit Data">
<input class="btn" type="reset" value="Cancel">
</td>
</tr>

</table>
</form>
</fieldset>


<!-- POST FORM -->
<fieldset>
<legend>This form uses POST request</legend>

<form action="redirect.php" method="POST">

<table>

<tr>
<td>First Name</td>
<td><input type="text" name="fname" required></td>
</tr>

<tr>
<td>Middle Name</td>
<td><input type="text" name="mname" required></td>
</tr>

<tr>
<td>Last Name</td>
<td><input type="text" name="lname" required></td>
</tr>

<tr>
<td>Age</td>
<td><input type="number" name="age" min="1" max="120" required></td>
</tr>

<tr>
<td>Gender</td>
<td>
<input type="radio" name="gender" value="Male" required> Male
<input type="radio" name="gender" value="Female"> Female
</td>
</tr>

<tr>
<td>Email</td>
<td><input type="email" name="email" required></td>
</tr>

<tr>
<td>Address</td>
<td><textarea name="address" required></textarea></td>
</tr>

<tr>
<td>Contact Number</td>
<td>
<input type="tel" name="contact"
pattern="[0-9]{11}"
placeholder="11 digit number"
required>
</td>
</tr>

<tr>
<td></td>
<td>
<input class="btn" type="submit" value="Submit Data">
<input class="btn" type="reset" value="Cancel">
</td>
</tr>

</table>
</form>

</fieldset>

</body>
</html>
