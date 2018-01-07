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
      
require('includes/connect_db.php');

# Includes these helper functions
require('includes/helpers.php');

      

if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
    $desc = $_POST['desc'] ;

    $oname = $_POST['oname'] ;
    
    $lnum = $_POST['lnum'] ;
    
    $num = $_POST['num'] ;
    
    if(!$desc){
        echo '<p>Please complete the Description field.</p>';
    }
    if(!$oname){
        echo '<p>Please complete the Owner field.</p>';
    }
    if(!$lnum){
        echo '<p>Please complete the Location Number field.</p>';
    }
    if(!$num){
        echo '<p>Please complete the Phone Number field.</p>';
    }
    
        $result = insert_record_owner($dbc, $desc, $oname, $lnum, $num);
    
    }
      
echo '<H3><A HREF=LimboLandingPage.php>Landing Page</A>  <A HREF=lostSomething.php>Lost an item</A>  <A HREF=foundSomething.php>Found an item</A>  <A HREF=adminLogin.php>Admin Login</A>  <H3> ' ;         

lost($dbc);      
      
echo '<H1>Enter your lost item</H1>' ;
      
echo '<h3><img src="http://www.marist.edu/about/images/updatedmap.jpg" height="400px" width="600px"><h3>';

      
# Close the connection
mysqli_close( $dbc ) ;
?>
    
<form action="addLost.php" method="POST">
<table>
<tbody><tr>
<td>Description:</td><td><input type="text" name="desc" value="<?php if (isset($_POST['desc']))echo $_POST['desc']; ?>"></td>
</tr>
<tr>
<td>Owner:</td><td><input type="text" name="oname" value="<?php if (isset($_POST['oname']))echo $_POST['oname']; ?>"></td>
</tr>
<tr>
<td>Location Number:</td><td><input type="text" name="lnum" value="<?php if (isset($_POST['lnum']))echo $_POST['lnum']; ?>"></td>
</tr>
<tr>
<td>Phone Number:</td><td><input type="text" name="num" value="<?php if (isset($_POST['num']))echo $_POST['num']; ?>"></td>
</tr>
</tbody></table>
<p class="Submit"><input type="submit"></p>
</form>

      


  

</body>
</html>