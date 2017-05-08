<!DOCTYPE html>
<?php
    session_start();
?>
<html>
<title>Baozi Boom</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<head>
<style>
body {font-family: "Lato", sans-serif}
.autoplay {display: none}
input{
        text-align:center;
  font-family: 'Open Sans Condensed', sans-serif;
  text-decoration: none;
  position: relative;
  width: 50%;
  display: block;
  margin: 9px auto;
  font-size: 17px;
  color: #fff;
  padding: 8px;
  border-radius: 6px;
  border: none;
  background: rgba(3,3,3,.3);
  -webkit-transition: all 2s ease-in-out;
  -moz-transition: all 2s ease-in-out;
  -o-transition: all 2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
    button[type=submit] {
     cursor: pointer;
    position: relative;
  top: 5px;
  left: 0;
  right: 0;
  bottom: 0;
  padding: 30px;
  margin: auto;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: rgba(1,1,1,2.1);
  overflow: hidden;
  opacity: 0.8;
  box-shadow: 10px 10px 30px #000;
}
    div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
    h1{
        color:darkslategrey;
        font-family:monospace;
        font-size:160%;
        padding:10px;
    }
    p{
        color:red;
        margin:5px auto;
        padding:30px;
        font-family:sans-serif;
        font-size:150%;
        text-align:center;
    }
    #back{
    background: url(images/bimohua.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    overflow: hidden;
        opacity:0.7;
    }

    .autoplay {display: none}
</style>
    
     <script>
        function showHint(str) {
            var xhttp;
            if (str.length == 0) { 
                document.getElementById("txtHint").innerHTML = "";
                return;
            }else{
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };   
                xmlhttp.open("GET", "gethint.php?q="+str, true);
                xmlhttp.send();
            }
        }
    </script>
    </head>
<body>

     <form method="POST" action="" id ="back" style="height:700px">
         <h1><font size = "7">Welcome to The Baozi</font></h1>
         <font size = "5">Please sign in to see the content</font>
         <center><font size = "4" style="margin:5px auto">Available User:<span id="txtHint"></span></font></center>
         <input type="text" size = "50" onkeyup="showHint(this.value)" placeholder="Username" name="username" style="background-color:black;opacity:0.8">
         <input type="password" placeholder="Password" name="password" style="background-color: black;opacity:0.8">
         <center><button type="submit" name="submit"  value="login" placeholder = "Log In"></button></center>
        
<?php
     if(isset($_COOKIE['logged'])){
        header("mainpage.php");
    }
    
    if(isset($_POST['submit'])){
        if (empty($_POST['username']) || empty($_POST['password'])) {
 ?>
    <p>Please check your information again!</p>
 <?php
        }else{

        $username = $_POST['username'];
        $password = $_POST['password'];
       
        $link = mysql_connect("localhost", "root", "");
        $db = mysql_select_db("test", $link);
           
        $check_query = mysql_query("select * from user where username='$username' AND password='$password'",$link);

            if(mysql_fetch_array($check_query)){
//                echo"ok";
                setcookie('logged','xl','0');
                $_SESSION['username'] = $username;
                $_SEESION['password'] = $password;            
                
                header("location:mainpage.php");
            }else{
                ?>
    <p>Wrong Username or Password, plases enter again!</p>
               <?php
                }
        
        mysql_close($connection);
            
        }
}
   
             ?>
    </form>
 </body>
</html>
