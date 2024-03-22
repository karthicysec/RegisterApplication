<!doctype html>
<html>
<head> 
<title>Register Form</title>
<link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
<div class="regform"><h1>Registration Form</h1></div>
<div class="main">
<form action="registerform.php" method="post">
<div id="name">
<h2 class="name">Name</h2>
<input class="firstname" type="text" name="first_name"><br>
<label class="firstlabel">First Name</label>
<input class="lastname" type="text" name="last_name"><br>
<label class="lastlabel">Last Name</label> 
</div>
<h2 class="name">College</h2>
<input class="college" type="text" name="college"><br>
<h2 class="name">Email</h2>
<input class="email" type="text" name="email"><br>
 
<h2 class="name">Phone</h2>
<input class="phonenumber" type="text" name="phone_number">
<label class="phone-number">Phone Number</label> 
<h2 class="name">Subject</h2>
<select class="option" name="subject">
<option disabled="disabled" selected="selected">--Choose option--</option>
<option>Bsc Computer Science</option>
<option>Bsc Botany</option>
<option>Bsc English</option>
 </select>
<button type="submit">Register</button> 
</label>
</form>
</div>
</body>
</html>