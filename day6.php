
<?php

// Day 6 of PHP
// Today we will learn about Sessions.
//
// Sessions allow us to store data on the server
// and access that data across different pages.
//
// This is useful for:
// - Login systems
// - User accounts
// - Shopping carts
// - Multi-step forms
//
// Example:
//
// register.php
// ↓
// Store data in $_SESSION
// ↓
// Redirect to signup.php
// ↓
// Retrieve the data from $_SESSION
//
// Sessions are temporary storage.
// Unlike a database, session data is usually removed
// when the user logs out or the session expires.

?>

<?php 

session_start();//so start of the sessioning 

 $_SESSION['username'] = 'Allan'; //so here we put the string value allan to the session variable



?>

