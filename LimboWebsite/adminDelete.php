<html><head>
    <meta http-equiv="Content-Style-Type" content="text/css"> 
    <title>linkypresidents.php</title>
    <link href="/library/skin/tool_base.css" type="text/css" rel="stylesheet" media="all">
    <link href="/library/skin/morpheus-default/tool.css" type="text/css" rel="stylesheet" media="all">
    <script type="text/javascript" src="/library/js/headscripts.js"></script>
    <style>body { padding: 5px !important; }</style>
     <link rel ="stylesheet" type="text/css" href="LostSomethingStyleSheet.css">
  </head>
  <body>
      
<?php
      
echo '<H3> <A HREF=admin.php>Admin Page</A> <A HREF=LimboLandingPage.php>Landing Page</A>  <A HREF=lostSomething.php>Lost an item</A>  <A HREF=foundSomething.php>Found an item</A> <H3> ' ;
      
require('includes/connect_db.php');

# Includes these helper functions
require('includes/helpers.php');


if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
    $id = $_POST['id'] ;

    
    
    if(!$id){
        echo '<p>Please complete the Admin Id field.</p>';
    }
   
        $result = delete_user($dbc, $id);
  
    }
    
 
 
# Show the records
users($dbc);
      
echo '<H1>Delete An Admin</H1>' ;
      
echo '<H2>Insert the ID.</H2>' ;

# Close the connection
mysqli_close( $dbc ) ;
?>
    
<form action="adminDelete.php" method="POST">
<table>
<tr>
<td>Admin ID:</td><td><input type="text" name="id"></td>
</tr>
</table>
<p class="Submit"><input type="submit" ></p>
</form>




  

</body>
</html>