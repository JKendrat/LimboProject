<html>
<head>
<link rel ="stylesheet" type="text/css" href="LostSomethingStyleSheet.css">     
</head>
      
<?php
    
echo '<H3><A HREF=LimboLandingPage.php>Landing Page</A>  <A HREF=lostSomething.php>Lost an item</A>  <A HREF=foundSomething.php>Found an item</A>  <A HREF=adminLogin.php>Admin Login</A>  <H3> ' ;# Connect to MySQL server and the database
require('includes/connect_db.php');

# Includes these helper functions
require('includes/helpers.php');
    

$alink = '<A HREF=addLost.php>Add an item you lost!</A>' ;
echo '<H2>' . $alink .  '</H2>' ;
    
echo '<H2><A HREF=updateFound.php>Select an item to claim!</A></H2>' ;

# Show the records
lost($dbc);



# Close the connection
mysqli_close( $dbc ) ;
?>
</html>  

