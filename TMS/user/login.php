<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    if($email=="admin@gmail.com" && $password=="admin123"){
         echo "<script>alert('✅ Login successful!'); window.location.href='../Admin_Module/admin_panel.html';</script>";
    }

    // Fetch user by email
    $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($user_id, $name, $hashedPassword);
        $stmt->fetch();

        if (password_verify($password, $hashedPassword)) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_name'] = $name;

            echo "<script>alert('✅ Login successful!'); window.location.href='user_panel.php';</script>";
        } else {
            echo "<script>alert('❌ Invalid password'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('❌ Email not registered'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
