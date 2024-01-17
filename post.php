<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login (POST)</title>
</head>
<body>
    
<div class="login-container">
    <h2>Form Login</h2>
        <div class="form-wrapper">
            <form action="get.php" method="POST" class="login-form">
                <div class="form-group">
                    <label for="username">Nama:</label>
                    <input type="text" name="username" id="username" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Kata Sandi:</label>
                    <input type="password" name="password" id="password" required>
                </div>
                
                <div class="form-group">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>


    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    
    // Lakukan validasi login, misalnya dengan memeriksa di database.
    // Contoh sederhana, hanya sebagai ilustrasi. Harap gantilah dengan implementasi yang lebih aman.
    if ($username == "alfan" && $email == "alfan@gmail.com" && $password == "alfan123") {
        echo "Login berhasil. Selamat datang, $username!";
    } else {
        echo "Login gagal. Periksa kembali username, email, dan password.";
    }
}
?>


<style>
   body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

h2 {
    text-align: center;
    color: #333;
}

.login-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    height: 350px;
}

.form-wrapper {
    max-width: 400px;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 16px;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
</style>

</body>
</html>
