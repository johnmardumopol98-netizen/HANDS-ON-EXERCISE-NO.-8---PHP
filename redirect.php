<?php

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $req_type = '$_GET';
    $data = $_GET;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $req_type = '$_POST';
    $data = $_POST;
}

?>
<!DOCTYPE html>
<html>
<head>
<title>PHP Output</title>

<style>

body{
    font-family:Arial;
    background:#f4f4f4;
}

.container{
    width:500px;
    margin:auto;
    margin-top:50px;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.1);
}

table{
    width:100%;
}

td{
    padding:6px;
}

.value{
    border-bottom:1px solid black;
}

a{
    text-decoration:none;
    color:white;
    background:#007BFF;
    padding:10px 15px;
    border-radius:5px;
}

</style>

</head>

<body>

<div class="container">

<h2>Data is sent here and stored in <?php echo $req_type; ?></h2>

<table>

<tr>
<td>First Name:</td>
<td class="value"><?php echo $data['fname']; ?></td>
</tr>

<tr>
<td>Middle Name:</td>
<td class="value"><?php echo $data['mname']; ?></td>
</tr>

<tr>
<td>Last Name:</td>
<td class="value"><?php echo $data['lname']; ?></td>
</tr>

<tr>
<td>Age:</td>
<td class="value"><?php echo $data['age']; ?></td>
</tr>

<tr>
<td>Gender:</td>
<td class="value"><?php echo $data['gender']; ?></td>
</tr>

<tr>
<td>Email:</td>
<td class="value"><?php echo $data['email']; ?></td>
</tr>

<tr>
<td>Address:</td>
<td class="value"><?php echo $data['address']; ?></td>
</tr>

<tr>
<td>Contact Number:</td>
<td class="value"><?php echo $data['contact']; ?></td>
</tr>

</table>

<br><br>

<a href="./">Return to Main Form</a>

</div>

</body>
</html>
