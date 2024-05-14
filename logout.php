<?php
session_start();

unset($_SESSION['user_id']);
unset($_SESSION['username']);
unset($_SESSION['name']);
unset($_SESSION['surname']);
unset($_SESSION['role']);

header("Location: ../jobhiring/register/index.php");
