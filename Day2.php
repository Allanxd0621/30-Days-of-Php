<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--PRactising $_POST and $_GET and $_FILES-->

<?php 
//for post 
//first create the variable container
$username = '';

if(isset($_POST['username'])){ //if there is data in username, if execuetes

    if(isset($_POST['username'])){ //if there is data in username.
    $username = $_POST['username']; //put that data to $username.
    }

}

?>

<form method="POST">
    <input type="text" name="username" placeholder="enter username">
    <button type="submit">Submit</button>
</form>

<h2 class="postText"><?php // user that variable

echo $username; //echo to print variable.

?></h2>


<br><br>

<form method="GET"> 
<input type="text">

</form>

</body>
</html>