<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../home/index.php"); // Redirecting To Home Page
}
?>