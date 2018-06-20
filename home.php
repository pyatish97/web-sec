<?php
    require_once 'library.php';
    if(chkLogin()){
       
        echo "Logged in!";
        $name = $_SESSION["uname"];
        echo "Welcome $name!!!";
        

    }
    else{
        header("Location: login.php");
    }

    if(isset($_POST['logout'])){
        
        $var = removeall();
        if($var){
            header("Location:login.php");
        }
        else{
            echo "Error!";
        }
    
    }
?>
<html>
    <body style="background-color:#272827">
		<div style="align:center; margin-left:420px;margin-top:250px"><h1 style="color:#74b74d">Visit again !!!</h1></div>
        <form method="post" action="">
            <input style=" color:white; border-radius:300px; margin-top:25px ;margin-left:475px; width: 80px; height: 40px; background-color:#12C5EB"  type="submit" name="logout" value="Logout!">
        </form>
    </body>
</html>
