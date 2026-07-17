<?php

// Apply (Creating the cookie)
//setcookie("User","Krishna",time() + 300);

// Analyze(Edit the cookie) 
//setcookie("User","Ramanuj",time() + 300);

// Delete the cookie
setcookie("User","Krishna",time() -300);
echo $_COOKIE['User'];



?>