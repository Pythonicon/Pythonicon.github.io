<?php
if($_POST["message"]) {
    mail("shahvraj26@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>