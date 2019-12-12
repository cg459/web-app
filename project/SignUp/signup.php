<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="style.css">
   
</head>
<body>
<form id="form-user" onsubmit="return validate();" 
    action="../model/SUfunction.php" method="post">
		 <div class="form-box" data-errormsg="">
            <label for="input-email">E-mail.(Your E-maill will be your Username)</label>
            <input type="email" id="input-email" name="email" tabindex="1" />
        </div>
		 </div>
        <div class="form-box" data-errormsg="">
            <label for="input-password">Please enter a valid Password</label>
            <input type="password" id="input-password" tabindex="2" name="password1" />
        </div>
        <div class="form-box error" data-errormsg="">
            <label for="input-first">First Name</label>
            <input type="text" id="input-first" name="fname" tabindex="3"/>
        </div>
        <div class="form-box" data-errormsg="">
            <label for="input-last">Last Name</label>
            <input type="text" id="input-last" name="lname" tabindex="4" />
        </div>
		<div class="form-box" data-errormsg="">
            <label for="input-major">Please enter your Major</label>
            <input  id="input-major" tabindex="5" name="major" required/>

        </div>
		  <div class="form-box" data-errormsg="">
            <label for="input-college">Please enter the College you went to/going to</label>
            <input type="text" id="input-college" name="college" tabindex="6" />
        </div>

       
        <div class="form-box">
            <button id="button-send">Sign up</button>
        </div>

    </form>
	

    
    <script src="functions.js"></script>
</body>
</html>
