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
      
echo '<H3><A HREF=LimboLandingPage.php>Landing Page!</A>  <A HREF=lostSomething.php>Lost an item</A>  <A HREF=foundSomething.php>Found an item</A>  <A HREF=adminLogin.php>Admin Login</A>  <H3> ' ;# Connect to MySQL server and the database
require('includes/connect_db.php');

# Includes these helper functions
require('includes/helpers.php');


if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
    $desc = $_POST['desc'] ;

    $fname = $_POST['fname'] ;
    
    $lnum = $_POST['lnum'] ;
    
    $num = $_POST['num'] ;
    
    /*if(!valid_number($num))
      echo '<p>Please give a valid number.<p></p>'; 
    
    else if (!valid_name($fname))
      echo '<p>Please complete the first name.</p>';
    
    else if (!valid_name($lname))
      echo '<p>Please complete the last name.</p>';
    
    else */
    
    if(!$desc){
        echo '<p>Please complete the Description field.</p>';
    }
    if(!$fname){
        echo '<p>Please complete the Finder field.</p>';
    }
    if(!$lnum){
        echo '<p>Please complete the Location Number field.</p>';
    }
    if(!$num){
        echo '<p>Please complete the Phone Number field.</p>';
    }
    
    
        $result = insert_record_finder($dbc, $desc, $fname, $lnum, $num);
    
    }
    

lost($dbc);
      
echo '<H1>Enter an item you have found </H1>' ;
      
echo '<h3><img src="http://www.marist.edu/about/images/updatedmap.jpg" height="400px" width="600px"><h3>';
      
# Close the connection
mysqli_close( $dbc ) ;
?>
    
<form action="addFound.php" method="POST">
<table>
<tbody><tr>
<td>Description:</td><td><input type="text" name="desc" value="<?php if (isset($_POST['desc']))echo $_POST['desc']; ?>"></td>
</tr>
<tr>
<td>Finder:</td><td><input type="text" name="fname" value="<?php if (isset($_POST['fname']))echo $_POST['fname']; ?>"></td>
</tr>
<tr>
<td>Location Number:</td><td><input type="text" name="lnum" value="<?php if (isset($_POST['lnum']))echo $_POST['lnum']; ?>"></td>
</tr>
<tr>
<td>Phone Number:</td><td><input type="text" name="num" value="<?php if (isset($_POST['num']))echo $_POST['num']; ?>"></td>
</tr>
</tbody></table>
<p><input type="submit"></p>
</form>



  

</body>
</html>