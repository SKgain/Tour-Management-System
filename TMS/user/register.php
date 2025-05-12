<?php
include 'config.php'; // Reuse the DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];
    $password = $_POST['password'];
    $confirm  = $_POST['confirmPassword'];

    if ($password !== $confirm) {
        echo "<script>alert('❌ Passwords do not match!'); window.history.back();</script>";
        exit;
    }

    // Check if email already exists
    $check = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "<script>alert('⚠️ Email already registered!'); window.history.back();</script>";
        exit;
    }

    // Insert new user
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (email, name, phone, address, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $email, $name, $phone, $address, $hashedPassword);

    if ($stmt->execute()) {
        echo "<script>alert('✅ Registration successful!'); window.location.href='login.html';</script>";
    } else {
        echo "<script>alert('❌ Registration error: " . $stmt->error . "'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
