
<!Doctype html>
<html>
	<link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>

    <head>
        <title>
            i-discussion
        </title>
        <script type="text/javascript">
            function validation(){
                var u = document.loginform.email.value;
                var p = document.loginform.pass.value;
                if(u==""||u==" "||p==""||p==" "){
                    alert("Please fill all the entries!");
                } 
            }
        </script>
        <style type="text/css">
        #welcome {
            color:white;
            font-size:120%;
            font-weight:bold;
			font: 40 30px/1.2 'Merienda One', Helvetica, sans-serif;
            position:absolute;
            top:20px;
            left:210px;
            
        }
        #signup {
		    color:white;
		    position:absolute;
			font-weight:bold;
			font: 40 32px/0.8 'Cookie', Helvetica, sans-serif;
		    top:200px;
		    left:1050px;
			background-color:black;
			border-radius:50px;
			border-color:white;
			border:solid 5px;
		    
		}
		body{
			background-image:url(bgimage.jpg);
			background-repeat:no-repeat;
			background-size:cover;
			
            
		}
		form{
		    color:white;
		    font-weight:bold;
		    font-size:150%;
		    font-family: "Comic Sans MS", cursive, sans-serif;
		}
		.box{
			position: absolute;
            top: 38%;
            left: 50%;
            transform: translate(-50%,-30%);
            width: 275px;
            height: 300px;
            padding: 30px 40px;
            box-sizing: border-box;
			border:3px solid white;
            background: rgba(55, 60, 55, .6);
			border-radius:20px;
			}
		.box button
				{
                font-size: 15px;
				font-family:"Comic Sans MS";
                width: 170px;
                height: 30px;
                margin-bottom: 15px;
                border-radius: 30px;
				border-color:black;
                position: relative;
				background-color:#834005;
				}
		.box button:hover{
			background:black;
			color:white;
			}
		.box p{
                margin: 0;
                padding:0 0 5px ;
                color: white; 
				font: 40 20px/1.3 'Berkshire Swash', Helvetica, sans-serif;
            }
		
		.box input{                
                width: 100%;               
                margin-bottom: 20px;
            }
		.box input[type="text"],
        .box input[type="password"]{
                
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
                height: 40px;
                color: #fff;
                font-size: 16px;
                
            }
		
		.sb button{
		    color:white;
			background:black;
		    position:absolute;
		    top:280px;
		    left:1115px;
		    font-weight:bold;
		    font-family:Andale Mono, monospace;
		    font-size:15px;
			border-radius:25px;
			
		}
		.sb button:hover{
			background:white;
			color:black;
			}
		.m1 marquee{
			position:fixed;
			color:white;
			font-size:25px;
			bottom:10px;
			margin-bottom:15px;
		}
		.terms {
			position:fixed;
			bottom:5px;
			left:1200px;
			font-size:15px;
			color:red;
		}
		
	</style>
    </head>
    <body>
       <div id="welcome">
          <h1>i-discussion Bennett</h1>
       </div>
	   <div id="signup">
		  <p>Do not have an account?</p>
	   </div>
	   <div class="sb"><button onClick="window.location.href='signupform.php'" >SIGN UP HERE!</button></div>
	   <div class="terms"><a href="terms.php">User Agreement</a></div>
	   <div class="m1"><marquee behavior="scroll" direction="left" width="100%">***Welcome To I-Discussion Bennett.***</marquee></div>
        <div class="box">
        <form name="loginform" onSubmit="validation()" action="login_db.php" method="POST">
			<p>Email</p>
            <input type="text" name="email" placeholder="Enter Email ID" >
            <p>Password</p>
            <input type="password" name="pass" placeholder="********" >
                
            <button class="button" name ="Submit" id="sb">LOGIN</button>
            
        </form>
		</div>
        <script type="text/javascript">
            
        </script>
		</body>
    
</html>