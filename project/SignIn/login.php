 <html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
<form id="form-user" onsubmit="return validate();" 
    action="../model/SIfunctions.php" method="post">
        <div class="form-box error" data-errormsg="">
            <label for="input-email">Username (your E-mail is your Username)</label>
            <input type="email" id="input-email" required placeholder="Username" tabindex="1" name="loginName"/>
        </div>
        
        <div class="form-box" data-errormsg="">
            <label for="input-password">Password</label>
            <input type="password" id="input-password" required placeholder="Password" tabindex="2" name="password"/>
        </div>
        
       
        <div class="form-box">
            <button id="button-send">Login</button>
			
        
    </form>
		
    
    <script src="functions/functions.js"></script>
	</body>
	</html>
