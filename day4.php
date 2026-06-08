<?php
//for day 4 ill just practice my forEach loop and prolly create some projects with it 

//this is php array 

$arrayPhps = ['allan' , 'jaz' , 'claire']; //always name your array with plural form 

// and this is php forEach loop

forEach($arrayPhps as $arrayPhp){ // so its not hard to read it when you do loops of values

echo $arrayPhp . '<br>'; //now we print it // add a break line because php is wierd prints it horizontally 

}


?>

<script>
    //now this is how you create an array using javascript

    const arrayJavaScripts = ['allan' , 'jaz' , 'claire']; //its the same an array begins with [] the only difference is how we name an array in js we need to create the variable using const for constant variables and let for changable variables and $ for variables in php,.

    //now to forEach loop this 

    arrayJavaScripts.forEach(function(arrayJavaScript){

    console.log(arrayJavaScript); //like php the name of the items inside the array will be singular;

    });


 </script>