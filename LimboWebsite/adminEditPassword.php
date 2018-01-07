<html><head>
    <meta http-equiv="Content-Style-Type" content="text/css"> 
    <title>linkypresidents.php</title>
    <link href="/library/skin/tool_base.css" type="text/css" rel="stylesheet" media="all">
    <link href="/library/skin/morpheus-default/tool.css" type="text/css" rel="stylesheet" media="all">
    <script type="text/javascript" src="/library/js/headscripts.js"></script>
    <style>body { padding: 5px !important; }</style>
  </head>
  <body>
      
<?php
      
echo '<H3> <A HREF=admin.php>Admin Page</A> <A HREF=LimboLandingPage.php>Landing Page</A>  <A HREF=lostSomething.php>Lost an item</A>  <A HREF=foundSomething.php>Found an item</A>    <H3> ' ;
      
require('includes/connect_db.php');

# Includes these helper functions
require('includes/helpers.php');


if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
    $id = $_POST['id'] ;
    
    $pass = $_POST['pass'] ;

    
    
    if(!$id){
        echo '<p>Please complete the Admin Id field.</p>';
    }
    if(!$pass){
        echo '<p>Please complete the Password field.</p>';
    }
   
        $result = edit_password($dbc, $id, $pass);
  
    }
    
$alink = '<A HREF=LimboLandingPage.php>Return to landing Page!</A>' ;
echo '<H1>' . $alink .  '</H1>' ;  
 
# Show the records
users($dbc);
      
echo '<H1>Change Admin Password</H1>' ;
      
echo '<H2>Select the admin by ID and enter the new password.</H2>' ;

# Close the connection
mysqli_close( $dbc ) ;
?>
    
<form action="adminEditPassword.php" method="POST">
<table>
<tr>
<td>Admin ID:</td><td><input type="text" name="id"></td>
</tr>
<tr>
<td>Password:</td><td><input type="text" name="pass"></td>
</tr>
</table>
<p class="Submit"><input type="submit" ></p>
</form>




  

</body>
</html>