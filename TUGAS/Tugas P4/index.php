<?php
if (isset($_COOKIE['email'])) {
    header("Location:main.php");
} else {
    header("Location:login.php");
}
