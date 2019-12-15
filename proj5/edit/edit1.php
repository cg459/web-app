
<?php
    require('../model/PDObject.php');
    require ('../model/buttonFunctions.php');
    session_start();
    echo $id4 = $_POST['id1'];
    $_SESSION["taskID3"] = $id4
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="style2.css" rel="stylesheet">
</head>
<body>

<form id="form-user" action="editFunction1.php" method="post">

    <div class="form-box" data-errormsg="">
        <label for="input-password">Title</label>
        <input type="text" id="title" tabindex="2" name="title1"/>
    </div>
    <div class="form-box error" data-errormsg="">
        <label for="input-first">Message</label>
        <input type="text" id="message" name="message1" tabindex="3"/>
    </div>
    <div class="form-box" data-errormsg="">
        <label for="input-last">Deadline</label>
       <input type="text" id="deadline" name="deadline1" tabindex="4" class="deadline"/>
<p> please use this format Year-Month-Day Hour:Minute:Second EX: 2017-05-03 00:00:00 For the deadline
</p>
    </div>


    <div class="form-box">
        <button id="button-send">Sign up</button>
    </div>
    


</form>
</body>
</html>




