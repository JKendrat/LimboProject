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
      
echo '<H3><A HREF=LimboLandingPage.php>Landing Page</A>  <A HREF=lostSomething.php>Lost an item</A>  <A HREF=foundSomething.php>Found an item</A>  <A HREF=adminLogin.php>Admin Login</A>  <H3> ' ;
require('includes/connect_db.php');

# Includes these helper functions
require('includes/helpers.php');


if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
    $id = $_POST['id'] ;

    $fname = $_POST['fname'] ;
    
    $num = $_POST['num'] ;

    if(!$id){
        echo '<p>Please complete the Item Id field.</p>';
    }
    if(!$fname){
        echo '<p>Please complete the Finder field.</p>';
    }
    if(!$num){
        echo '<p>Please complete the Phone Number field.</p>';
    }
    
        $result = update_record_finder($dbc, $id, $fname, $num);
    
    if($fname)
        echo '<H1 class = ListedItems>Thank you for submitting the item</H1>' ;

    
    }
    

 
# Show the records
lost($dbc);
      
echo '<H1>Update Lost Item</H1>' ;
      
echo '<H2>Add the Id of the item you found and your own name.</H2>' ;

# Close the connection
mysqli_close( $dbc ) ;
?>
    
<form action="updateLost.php" method="POST">
<table>
<tbody><tr>
<td>Item Id:</td><td><input type="text" name="id" value="<?php if (isset($_POST['id']))echo $_POST['id']; ?>"></td>
</tr>
<tr>
<td>Finder:</td><td><input type="text" name="fname" value="<?php if (isset($_POST['fname']))echo $_POST['fname']; ?>"></td>
</tr>
<tr>
<tr>
<td>Phone Number:</td><td><input type="text" name="num" value="<?php if (isset($_POST['num']))echo $_POST['num']; ?>"></td>
</tr>
</tbody></table>
<p class="Submit"><input type="submit"></p>
</form>



  

</body>
</html>

<html><head>
    <meta http-equiv="Content-Style-Type" content="text/css"> 
    <title>linkypresidents.php</title>
    <link href="/library/skin/tool_base.css" type="text/css" rel="stylesheet" media="all">
    <link href="/library/skin/morpheus-default/tool.css" type="text/css" rel="stylesheet" media="all">
    <script type="text/javascript" src="/library/js/headscripts.js"></script>
    <style>body { padding: 5px !important; }</style>
  </head>
  <body>
 