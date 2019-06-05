<!DOCTYPE html>
<html lang="en">
<head>
<?php include "linkfiles.php"?>
<meta charset="UTF-8">
<title>Contact</title>
</head>
<body>
<div class="main">

<div class="top"><?php include"header.php"?></div>

<div class="midbox">

<h1 class="header">
<p>Contact</p>
</h1>

<div class="box1">
<p>If There Any Questions Feel Free to Call/Message on my Phone Number, or Email at Email Address.</p>
</div>

<div class="row">
<div class="box2">
<p>Phone Number: (555)555-5555 <br><br>Email: tailshenry@icloud.com <br><br><a href="https://www.linkedin.com/in/henry-lopez-cart/" target="_blank">LinkedIn</a></p>
</div>

<div class="box2">
<form action="send_ mail.php" method="post">
    
    <label for="fn">First Name:</label>
    <input type="text" name="fn">
    
    <label for="ln">Last Name:</label>
    <input type="text" name="ln"><br><br>
    
    <label for="sex">Gender:</label>
    <input type="radio" name="sex" value="M">Male
    <input type="radio" name="sex" value="F">Female
    <input type="radio" name="sex" value="O">Other <br><br>
    
    <label for="email">Email Address:</label><br>
    <input type="email" name="email" placeholder="address@domain.com"><br><br>
    
    <label for="bio">Notes/Feedback:</label><br>
    <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
    
</form>
</div>
</div>
</div>

<div class="foot"><?php include"footer.php"?></div>
</div>
</body>
</html>