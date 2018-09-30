<?php
session_start();
error_reporting(0);
        $user = array(
                 "user" => "Tanaya",
                 "pass"=>"12345"            
                    );
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $user['user'] && $_POST['password'] == $user['pass']){
       
        $_SESSION["username"] = $_POST['username']; 
        echo "Selamat Datang $_POST[username]";

    } else {
        
        display_login_form();
        echo '<p>Username Atau Password Tidak Benar</p>';
    }
}    
else { 
    display_login_form();
}
function display_login_form(){ ?>
    <form action="prosesTA.php" method='POST'>
    <center> LOGIN HERE FIRST<center><br/>
    <center><label for="username"> Klik You Username :</label><center>
    <input type="text" name="username" id="username">
    <br><br>
    <center><label for="password">Klik Your Password :</label><center>
    <input type="password" name="password" id="password">
    <br><br>
    <input type="submit" name="submit" value="Login">
    
    </form>    
<?php } ?>
