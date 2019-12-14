
<?php
    require('../model/PDObject.php');
    require ('../model/buttonFunctions.php');
    session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="style2.css" rel="stylesheet">
    <script src="../functions/completed.js"></script>
</head>
<body>

<form id="form-user" method="post">
    <div class="form-box" data-errormsg="">
        <label>Title</label>
        <input type="text" id="title" tabindex="2" name="title"/>
    </div>
    <div class="form-box error" data-errormsg="">
        <label>Message</label>
        <input type="text" id="message" name="message" tabindex="3"/>
    </div>
    <div class="form-box" data-errormsg="">
        <label>Deadline</label>
       <input type="text" id="deadline" name="deadline" tabindex="4" class="deadline"/>
<p> please use this format Year-Month-Day Hour:Minute:Second EX: 2017-05-03 00:00:00 For the deadline
</p>
    </div>


    <div class="form-box">
        <button id="button-send" onclick="everythingFull();">Sign up</button>
        <p id="replace"></p>
    </div>
    


</form>
</body>
</html>


