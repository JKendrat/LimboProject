<html><head>
    <meta http-equiv="Content-Style-Type" content="text/css"> 
    <title>linkypresidents.php</title>
    <link href="/library/skin/tool_base.css" type="text/css" rel="stylesheet" media="all">
    <link href="/library/skin/morpheus-default/tool.css" type="text/css" rel="stylesheet" media="all">
    <script type="text/javascript" src="/library/js/headscripts.js"></script>
     <link rel ="stylesheet" type="text/css" href="LostSomethingStyleSheet.css">
    <style>body { padding: 5px !important; }</style>
  </head>
  <body>
      
<?php
echo '<H3> <A HREF=admin.php>Admin Page</A> <A HREF=LimboLandingPage.php>Landing Page</A>  <A HREF=lostSomething.php>Lost an item</A>  <A HREF=foundSomething.php>Found an item</A><H3> ' ;
      
require('includes/connect_db.php');

# Includes these helper functions
require('includes/helpers.php');


if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
    $username = $_POST['username'] ;
    
    $pass1 = $_POST['pass'] ;
    
    $pass2 = $_POST['pass2'] ;

    
    
   if(!$username){
        echo '<p>Please complete the Username field.</p>';
    }
    
    if(!$pass1){
        echo '<p>Please complete the Password field.</p>';
    }
    
    if(!$pass2){
        echo '<p>Please complete the Verify Password field.</p>';
    }

    
    
      
    if ($pass1 = $pass2)
        $result = add_user($dbc, $username, $pass1);
    else 
        echo '<p>Your passwords do not match.</p>';
    
    }
 
# Show the records
users($dbc);   
echo '<H1>Add a new user</H1>' ;
      
echo '<H2>Insert username and password twice.</H2>' ;

# Close the connection
mysqli_close( $dbc ) ;
?>
    
<form action="adminAddNew.php" method="POST" id = SubmitInfo>
<table>
<tbody><tr>
<td>Username:</td><td><input type="text" name="username" value="<?php if (isset($_POST['username']))echo $_POST['username']; ?>"></td>
</tr>
<tr>
<td>Password:</td><td><input type="text" name="pass" value="<?php if (isset($_POST['pass']))echo $_POST['pass']; ?>"></td>
</tr>
<tr>
<td>Verify Password:</td><td><input type="text" name="pass2" value="<?php if (isset($_POST['pass2']))echo $_POST['pass2']; ?>"></td>
</tr>
</tbody></table>
<p class="Submit"><input type="submit" ></p>
</form>




  

</body>
</html>