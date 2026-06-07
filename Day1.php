<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php echo'hello php'; 
   //display this is the displaying code of php its like html lmfao
    //variables in php i dont know why they need the dollar sign to create a variable what a wierd way to set up a syntax
    ?> <br>
    <?php 
    
    $username = "Allan";

    
    
    ?>

    <?php 
    echo $username; 
    // so like js you can store datas inside a variable pretty basic and call it using echo instead of console.log 

    //the only thing bothers me is that why the fuck do we need theses <? like bro thinks he's html or something 
    
    //one more thing you can access  codes that are in other <? as long as its in the same file.
    ?> <br>



    <?php 
        //other variables

    //oh and unlike javascript php is ; sensitve on semi coloums it cries without it what a soft ass language 

    //but on the other hand it is case insensitve meaning if i type a capital ECHO it still words or EchO what the fuck is wrong with this language

    $string = 'allan';
    $int = '4';
    $boolean = true; //bolean dont have '' idiot like js

    ecHo$string . ' has ' . $int . ' apples ' . $boolean;
    ?>

    <form method = "post">
        <input type="text" name="username">
        <button type="submit">Submit</button>
    </form>
    <?php /*
    if(isset($_POST['username'])){
        echo $_POST['username'];
    } //isset means if there is this code 
    //then it executes the code idk why you need that just php bullshit  */
    
    ?>

    <br><br>
    <form method = "post">
        <input type="text" name="username">
        <br><br>
        <input type="number" name="age">
        <br>
        <button type="submit">Submit</button>
    </form>


<?php /*
        if(isset($_POST['username'])&& isset($_POST['age'])){
            echo 'I am ' . $_POST['username'] . ' , ' . $_POST['age'] . ' years Old.';
        }

        
    //simple submit and print code which is absolute dog shit of a syntax and why the fuckdo i need to isset or verify my code if its there to execute my code

    //chat told me that isset($_POST[]) basically means to check if there is written inside the $_POST to continue to avoid nulls in the username ; */
    ?>


    <br><br>
    <form method="post">
        
        <input type="number" name="age" placeholder="enter your age">
        <br>
        <button type="submit">Submit</button>
    </form>

    

<?php //easy

if(isset($_POST['age'])){

    if(empty($_POST['age'])){//asks why age is empty
    echo'Please Enter a valid Age.';
    }

    else if($_POST['age'] >= 18){ 
        echo'you are ' . $_POST['age'] . ' Years Old. Adult.';
    }else{
        echo'you are ' . $_POST['age'] . ' Years Old. Minor';
    }


}

?>


</body>
</html>