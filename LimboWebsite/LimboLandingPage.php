
<html>
<head>
<link rel ="stylesheet" type="text/css" href="lpss.css">     
</head>
<?php
$debug = true;



#$alink = '<A HREF="lostSomething.php">Lost</A>' ;
#echo $alink;
#$blink = '<A HREF=foundSomething.php?' . '</A>' ;
#echo $blink
#$clink = '<A HREF=adminLogin.php?' . '</A>' ;
#echo $clink
       

echo '<h3><img src="http://www.marist.edu/publicaffairs/imc/graphics/For_Web/Nameplate/MaristLogoRed.jpg" height="150px" width="750px"><h3>';
    
   

echo '<H1>Welcome To リンボ(Limbo)</H1>' ;
echo '<TABLE Id = "LimboLinksTable">';
echo '</TR>';
echo '<H2>Found or lost an item? Limbo is here to help!<H2>';
echo '<H2>Links</H2>';
echo '</TR>';    

echo '<TR>' ;
$alink = '<A HREF=lostSomething.php>Lost an item</A>' ;
echo '<H2>' . $alink .  '</H2>' ;
echo '</TR>' ;
    
echo '<TR>' ;
$blink = '<A HREF=foundSomething.php>Found an item</A>' ;
echo '<H2>' . $blink .  '</H2>' ;
echo '</TR>' ;

echo '<TR>' ;
$clink = '<A HREF=adminLogin.php>Admin Login</A>' ;
echo '<H2>' . $clink .  '</H2>' ;
echo '</TR>' ;

   
    
echo '</TABLE>';
?>
</html>