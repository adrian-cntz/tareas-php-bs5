<?php
    $dbhost	= "db4free.net";	    
    $dbuser	= "adriancnz";		    
    $dbpass	= "tareasphp01";		        
    $dbname	= "tareasphp"; 
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>