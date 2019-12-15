<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="../css/forSU.css">
    <script src="../functions/sufunction.js"></script>

   
</head>
<body>
<div class="yeah">
    <form id="form-user" method="post">
        <div class="nah">
             <div class="form-box" data-errormsg="">
                <label for="input-email">E-mail.(Your E-maill will be your Username)</label>
                <input type="email" id="input-email" name="email" tabindex="1" required/>
            </div>
             </div>
            <div class="form-box" data-errormsg="">
                <label for="input-password">Please enter a valid Password</label>
                <input type="password" id="input-password" tabindex="2" name="password1" required/>
            </div>
            <div class="form-box error" data-errormsg="">
                <label for="input-first">First Name</label>
                <input type="text" id="input-first" name="fname" tabindex="3" required/>
            </div>
            <div class="form-box" data-errormsg="">
                <label for="input-last">Last Name</label>
                <input type="text" id="input-last" name="lname" tabindex="4" required/>
            </div>
            <div class="form-box" data-errormsg="">
                <label for="input-major">Please enter your Major</label>
                <input  id="input-major" tabindex="5" name="major" required/>
            </div>
              <div class="form-box" data-errormsg="">
                <label for="input-college">Please enter the College you went to/going to</label>
                <input type="text" id="input-college" name="college" tabindex="6" required/>
            </div>

           
            <div class="form-box">
                <button id="button-send" onclick="everythingFull(); emailReg();">Sign up</button>
            </div>
            <div class="forError">
                <p id="replace1"></>
                <p id="replace2"></>
                <p id="replace3"></>
                <p id="replace4"></>
                <p id="replace5"></>
                <p id="replace6"></>
                <p id="replace7"></>
        </div>
            </div>

        </form>
</div>
</body>
</html>
