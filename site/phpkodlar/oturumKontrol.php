<?php
session_start();
if(@$_SESSION["girisYaptimi"]!=true){
    echo "bu alana girmek için giriş yapınız.<a href='uyegiris.php'>giriş</a>";
    echo "<meta http-equiv ='refresh' content = '2; url = uyegiris.php'/>";
    exit();
}
?>