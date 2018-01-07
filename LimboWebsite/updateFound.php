<html><head>
    <meta http-equiv="Content-Style-Type" content="text/css"> 
    <title>linkypresidents.php</title>
    <link href="/library/skin/tool_base.css" type="text/css" rel="stylesheet" media="all">
    <link href="/library/skin/morpheus-default/tool.css" type="text/css" rel="stylesheet" media="all">
    <link rel ="stylesheet" type="text/css" href="LostSomethingStyleSheet.css">
    <script type="text/javascript" src="/library/js/headscripts.js"></script>
    <style>body { padding: 5px !important; }</style>
    

    
  </head>
  <body>

<?php
      
echo '<H3><A HREF=LimboLandingPage.php>Landing Page</A>  <A HREF=lostSomething.php>Lost an item</A>  <A HREF=foundSomething.php>Found an item</A>  <A HREF=adminLogin.php>Admin Login</A>  <H3> ' ;
require('includes/connect_db.php');

# Includes these helper functions
require('includes/helpers.php');


if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
    $id = $_POST['id'] ;

    $oname = $_POST['oname'] ;
    
    $num = $_POST['num'] ;
    
    
    
    if(!$id){
        echo '<p>Please complete the Item Id field.</p>';
    }
    if(!$oname){
        echo '<p>Please complete the Owner field.</p>';
    }
    if(!$num){
        echo '<p>Please complete the Phone Number field.</p>';
    }
    
        $result = update_record_owner($dbc, $id, $oname, $num);
    
    
    if($oname)
        echo '<H1 class = ListedItems>Your item Information</H1>' ;
        lost_record_secure($dbc, $id);
    }
    


 
# Show the records
lost($dbc);
      
echo '<H1>Update Found Item</H1>' ;
      
echo '<H1>Add the Lost item Id and your name</H1>' ;

# Close the connection
mysqli_close( $dbc ) ;
?>
    
<form action="updateFound.php" method="POST">
<table>
<tbody><tr>
<td>Item Id:</td><td><input type="text" name="id" value="<?php if (isset($_POST['id']))echo $_POST['id']; ?>"></td>
</tr>
<tr>
<td>Owner:</td><td><input type="text" name="oname" value="<?php if (isset($_POST['oname']))echo $_POST['oname']; ?>"></td>
</tr>
<tr>
<td>Phone Number:</td><td><input type="text" name="num" value="<?php if (isset($_POST['num']))echo $_POST['num']; ?>"></td>
</tr>
</tbody></table>
<p class="Submit"><input type="submit"></p>
</form>



  

<html><head>
    <meta http-equiv="Content-Style-Type" content="text/css"> 
    <title>linkypresidents.php</title>
    <link href="/library/skin/tool_base.css" type="text/css" rel="stylesheet" media="all">
    <link href="/library/skin/morpheus-default/tool.css" type="text/css" rel="stylesheet" media="all">
    <script type="text/javascript" src="/library/js/headscripts.js"></script>
    <style>body { padding: 5px !important; }</style>
  </head>
  <body>
 