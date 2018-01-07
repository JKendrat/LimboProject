<?php
$debug = true;

echo '<H3> <A HREF=LimboLandingPage.php>Landing Page</A> <A HREF=lostSomething.php>Lost an item</A>  <A HREF=foundSomething.php>Found an item</A>  <A HREF=adminLogin.php>Admin Login</A>  <H3> ' ;


#$alink = '<A HREF="lostSomething.php">Lost</A>' ;
#echo $alink;
#$blink = '<A HREF=foundSomething.php?' . '</A>' ;
#echo $blink
#$clink = '<A HREF=adminLogin.php?' . '</A>' ;
#echo $clink

echo'<html><head>  <link rel ="stylesheet" type="text/css" href="LostSomethingStyleSheet.css"> </head> </html>';


echo '<H1>Admin Page</H1>' ;
echo '<TABLE>';
echo '</TR>';  
echo '<TH>Links</TH>';
echo '</TR>';    

echo '<TR>' ;
$alink = '<A HREF=adminChangeStatus.php>Change status</A>' ;
echo '<TD>' . $alink .  '</TD>' ;
echo '</TR>' ;

echo '<TR>' ;
$blink = '<A HREF=adminDelete.php>Delete a user</A>' ;
echo '<TD>' . $blink .  '</TD>' ;
echo '</TR>' ;

echo '<TR>' ;
$clink = '<A HREF=adminAddNew.php>Add a New User</A>' ;
echo '<TD>' . $clink .  '</TD>' ;
echo '</TR>' ;

echo '<TR>' ;
$dlink = '<A HREF=adminDeleteItem.php>Delete an item</A>' ;
echo '<TD>' . $dlink .  '</TD>' ;
echo '</TR>' ;

echo '</TABLE>';
?>