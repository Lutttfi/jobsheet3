
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <style>
    body {
    font-family: Arial, sans-serif;
    background-image: url(bg.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.container {
    background-color: rgba(255, 255, 255, 0.5);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 500px;
    height: 400px;
    color: white;
}

.judul {
    font-family: 'Merriweather', serif;
    font-size: 30px;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin: 10px auto 5px;
    font-family: 'Merriweather', serif;
}

input {
    padding: 8px;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
    border-radius: 10px;
}

.login {
    padding: 10px;
    background-color: blue;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    margin-top: 20px;
}

.login:hover {
    background-color: darkblue;
}

    </style>

</head>
<body>
<div class="container">
    <h2 class="judul">Login</h2>

    <form action="job3get.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Login" class="login">
    </form>
</div>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Validasi login 
        if ($username === "admin" && $email === "contoh@gmail.com" && $password === "password1234") {
            // Jika login berhasil, redirect ke halaman sukses atau halaman lain yang diinginkan
            echo "Login Berhasil";
            exit();
        } else {
            // Jika login gagal, tampilkan pesan error
            echo "Login failed. Please check your username and password.";
        }
    }
?> 



</body>
</html>
