<?php
//$name = htmlspecialchars($_POST["name"]);
//$email = htmlspecialchars($_POST["email"]);
//$message = htmlspecialchars($_POST["message"]);

$to = "f.brionesgtz@gmail.com";
$subject = "Portfolio message";

if (isset($_GET["name"]) &&
    isset($_GET["email"]) &&
    isset($_GET["message"])) {
    try {
        @mail($to, $subject, $_GET["message"]);

        echo "<div>
                <p>Message sent successfully</p>
              </div>";
    } catch (Exception $e) {
        echo "<div>
                <p>Something went wrong</p>
              </div>";
    }
}


