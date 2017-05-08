<!--Log out-->
<?php
    session_start();
    setcookie('logged','',time()-3600);
    //echo"cookie deleted";
    header("location: index.php");
//   echo"You have logged out!"
    
?>