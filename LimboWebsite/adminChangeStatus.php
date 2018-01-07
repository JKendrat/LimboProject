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
      
echo '<H3> <A HREF=admin.php>Admin Page</A> <A HREF=LimboLandingPage.php>Landing Page</A>  <A HREF=lostSomething.php>Lost an item</A>  <A HREF=foundSomething.php>Found an item</A>  <H3> ' ;
      
require('includes/connect_db.php');

# Includes these helper functions
require('includes/helpers.php');


if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
    $id = $_POST['id'] ;

    $status = $_POST['status'] ;
    
    
    if(!$id){
        echo '<p>Please complete the Id field.</p>';
    }
    if(!$status){
        echo '<p>Please complete the Status field.</p>';
    }
    
        
        $result = update_status($dbc, $id, $status);
    
    }

 
# Show the records
lost($dbc);
      
echo '<H1>Change status of an Item</H1>' ;
      
echo '<H2>Add the found item Id and the new status.</H2>' ;

# Close the connection
mysqli_close( $dbc ) ;
?>
    
<form action="adminChangeStatus.php" method="POST">
<table>
<tbody><tr>
<td>Item Id:</td><td><input type="text" name="id" value="<?php if (isset($_POST['id']))echo $_POST['id']; ?>"></td>
</tr>
<tr>
<td>New status:</td><td><input type="text" name="status" value="<?php if (isset($_POST['status']))echo $_POST['status']; ?>"></td>
</tr>
</tbody></table>
<p class="Submit"><input type="submit"></p>
</form>



  

</body>
</html>