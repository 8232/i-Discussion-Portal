<!Doctype html>
<html>
    <head>
        <title>
            Sign Up
        </title>
        <script type="text/javascript">
			function checkpas(){
				var p = document.supform.password;
                var cp = document.supform.cpassword;
				var message = document.getElementById('confirm_msg'); 
				var goodColor = "#66cc66";
				var badColor = "#ff6666";
				if(p.value == cp.value){
					cp.style.backgroundColor = goodColor;
					message.style.color = goodColor;
					message.innerHTML = "Passwords Match!";
				}else{
					cp.style.backgroundColor = badColor;
					message.style.color = badColor;
					message.innerHTML = "Passwords Do Not Match!";
				}
		}
        </script>
        <style type="text/css">
            h1{
                color:blue;
                position:absolute;
                top:5px;
                left:500px;
            }
            form{
                position:absolute;
                top:80px;
                left:485px;
            }
			a{
				left:20px;
				top:20px;
			}
			
        </style>
    </head>
    <body>
		<a href="login.php">LOGIN TO PORTAL</a>
        <h1>Fill the below entries!</h1>
        <form name="supform" action="signup_db.php" method="POST">
            <fieldset style="text-align:right;">
            <legend align="left">New User</legend>
            First Name: <input id="fn" type="text" name="fname" title="Enter your first name here (no spaces)" required pattern="\w+" placeholder="First Name" /><br /><br />
            Last Name: <input type="text" name="lname" title="Enter your last name here (no spaces)" required pattern="\w+" placeholder="Last Name"/><br /><br />
            Email: <input id="em" type="email" name="email"   placeholder="Email" /><br /><br />
	        Password: <input type="password" name="password" minlength=6 maxlength=16 title="Password must contain uppercase and lowercase letters including numbers and must be 6 characters atleast" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,16}"  /><br /><br />
	        Confirm Password: <input type="password" name="cpassword" title="Please enter the same password as above" required pattern="\w+" placeholder="Confrim Password" onkeyup="checkpas()"  /><br /><br />
	        <span id="confirm_msg"></span>
			<input type="submit" name="Submit"/>
	        </fieldset>
    </body>
</html>