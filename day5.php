<?php
//first we will create the array holder for our infos and name it userInfos 

$userInfos = [
'username',
'password'

]; //inside the array we will put the names of our input that will be put in the variables  later on



//now we need to create a if statement where the function will only work if there is information put in the input elements 

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    //now to save time we will create a foreach loop to generate the $_POST variables for us that will serve as the infos of the user

    
    foreach($userInfos as $info){

        //now each infos should have a inputted from $_POST if none then we will use the $error to display lacking info

        if(empty($_POST[$info])){
            //if there are lackings this will run 
           echo $info . ' is required.';
            break;
        }else{
            // if there is no lacking information this code will execute
            //we will put the informations inside the variables to be use in the database 

            $username = $_POST['username'];
            $password = $_POST['password'];

            //and then they can now go to the log in center 

            header('Location: signup.php');
            exit();
            
        }

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="username" placeholder="enter username"> <br>
        <input type="password" name="password" placeholder="enter password">
        <br><br>
        <button type="submit">LOGIN</button>
    </form>
</body>
</html>