    
    <?php
        session_start();
        include ("connect.php");
        $link=conectDataBase();
        $result=mysqli_query($link, "select user_pw from users where user_name='".$_POST["userid"]."'");
        $pw=mysqli_fetch_array($result);
        
        #sha1($pw); para cifrar contraseñas
        $pw1=sha1($_POST["password"]);
        if ($pw["user_pw"]==$pw1) {
          # code...
          $_SESSION["loged"]="yes";
          $_SESSION["name"]=$pw["name"];
          header("Location: ../../Dashboard/home.php");
        } else {
          # code...
          header("Location: ../../Dashboard/home.php?login=0");
        
        }
    
     ?>
