<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8" />
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
	<title>CHURCH MANAGER</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Church Manager" />
	<meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico"> 
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
	<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
</head>
<body>
	<header>
		<h1 style="bold" size="30" position="center">CHURCH MANAGER <span>ACCESS POINT</span></h1>
	</header>
		<div id="container_demo" >
          <div id="wrapper">
              <div id="login" class="animate form">
				<form action="save.php" method="post">
					<h1> Sign Up </h1> 
					<p> 
						<label for="usernamesignup" class="uname" data-icon="u">First Name</label>
						<input id="usernamesignup" name="fname" required="required" type="text" placeholder="John" />
					</p>
					<p> 
						<label for="usernamesignup" class="uname" data-icon="u" > Middle Name</label>
						<input id="usernamesignup" name="sname" required="required" type="text" placeholder="Doe"/> 
					</p>
					<p> 
						<label for="usernamesignup" class="uname" data-icon="u">Last Name</label>
						<input id="usernamesignup" name="lname" required="required" type="text" placeholder="John" />
					</p>
					<p> 
						<label for="gendersignup" class="uname" data-icon="">Gender</label>
						
						 <select name="gender" id="gendersignup" required="required" type="text">
							  <option value="Select Gender">Select Gender</option>
							  <option value="Male">Male</option>
							  <option value="Female">Female</option>

						</select> 
					</p>
					<p> 
						<label for="usernamesignup" class="uname" data-icon="u">Date Of Birth</label>
						<input id="usernamesignup" type="date" name="birthday" min="1900-01-02" />
					</p>
					<p> 
						<label for="usernamesignup" class="uname" data-icon="u">Residence</label>
						<input id="usernamesignup" name="residence" required="required" type="text" placeholder="Katlehong" />
					</p>
					<p> 
						<label for="usernamesignup" class="uname" data-icon="u">Place of Birth</label>
						<input id="usernamesignup" name="pob" required="required" type="text" placeholder="Katlehong" />
					</p>
					<p> 
						<label for="usernamesignup" class="uname" data-icon="">Ministry</label>
						<select name="ministry" id="usernamesignup" required="required" type="text">
						  <option value="None">None</option>
						  <option value="Praise and Worship">Praise and Worship</option>
						  <option value="Ushering">Ushering</option>
						  <option value="Hostessing">Hostessing</option>
						  <option value="Media and IT">Media and IT</option>
						  <option value="Sunday School">Sunday School</option>
						</select> 
					</p>
					 <p> 
						<label for="emailsignup" class="youmail" data-icon="e" > Your Email</label>
						<input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
					</p>
					<p> 
						<label for="mobilesignup" class="youmobile" data-icon="t">Mobile Number </label>
						<input id="mobilesignup" name="mobile" required="required" type="text" placeholder="eg.0700000000"/>
					</p>
					<p> 
						<label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Password </label>
						<input id="passwordsignup_confirm" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
					</p>
				   
				   <p> 
						<label for="id" class="id" data-icon="i">Id </label>
						<input id="id" name="id" required="required" type="id" placeholder="eg. mobile"/>
					</p>
				   
					<p class="register-button">
						<button type="submit" class="btn btn-primary" name="submit" value="Save" id="submit_form">Submit</button>
						<img src="" id="loading-img">
					</p>
				   
					<p class="change_link">  
						Are you registered ?
						<a href="members/index.php" class="to_login"> Login </a>
					</p>
				</form>
        </div>
</body>