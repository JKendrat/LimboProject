<!--
This PHP script front-ends linkyprints.php with a login page.
Originally created By Ron Coleman.
Revision history:
Who	Date		Comment
RC  07-Nov-13   Created.
-->
<!DOCTYPE html>
<html>
    <head>
     <link rel ="stylesheet" type="text/css" href="LostSomethingStyleSheet.css">    
    </head>
<?php
echo '<H3><A HREF=LimboLandingPage.php>Landing Page</A>  <A HREF=lostSomething.php>Lost an item</A>  <A HREF=foundSomething.php>Found an item</A>  <H3> ' ;
require( 'includes/connect_db.php' ) ;

# Connect to MySQL server and the database
require( 'includes/presidents_login_tools.php' ) ;

if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {

	$username = $_POST['username'] ;
    
    $pass = $_POST['pass'] ;
    
    if(!$username){
        echo '<p>Please complete the Username field.</p>';
    }
    if(!$pass){
        echo '<p>Please complete the Password field.</p>';
    }
    

    $pid = validate($username,$pass) ;

    if($pid == -1)
      echo '<P style=color:red>Login failed please try again.</P>' ;

    else
      load('admin.php', $pid);
}
?>
<!-- Get inputs from the user. -->
<h1>Admin login</h1>
<form action="adminLogin.php" method="POST">
<table id = 'admintable'>
<tr>
<td>Username:</td><td><input type="text" name="username"></td>
</tr>
<tr>
<td>Password:</td><td><input type="password" name="pass"></td>
</tr>
</table>
<p class="Submit"><input type="submit" ></p>
</form>
</html>