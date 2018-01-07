      
<html>
<head>
<link rel ="stylesheet" type="text/css" href="LostSomethingStyleSheet.css">     
</head>
<?php
    
echo '<H3><A HREF=LimboLandingPage.php>Return to landing Page!</A>  <A HREF=lostSomething.php>Lost an item</A>  <A HREF=foundSomething.php>Found an item</A>  <A HREF=adminLogin.php>Admin Login</A>  <H3> ' ;
require('includes/connect_db.php');

# Includes these helper functions
require('includes/helpers.php');
      

    
if($_SERVER[ 'REQUEST_METHOD' ] == 'GET') {
    if(isset($_GET['id'])) 
        lost_record($dbc, $_GET['id']) ;
    }
    


    
# Show the records


# Close the connection
mysqli_close( $dbc ) ;
?>
    
</html>