<?php
require_once "../models/userModel.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $user = login($email, $password);

    if ($user && $user["role"]) {

        session_start();

        $_SESSION["admin_id"] = $user["id"];
        $_SESSION["admin_email"] = $user["email"];
        $_SESSION["admin_role"] = $user["role"];

        header("Location: ../views/Admin/dashboard.php");
        exit();

    } else {

        header("Location: ../views/Admin/login.php?error=Invalid admin login");
        exit();
    }
}

?>