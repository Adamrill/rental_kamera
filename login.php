
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <!-- link yt https://youtu.be/JDn6OAMnJwQ 9:22 -->
    <form method="POST" action="proses_login.php">
        <h2>Login</h2>
        <label>Username</label>
        <input type="text" name="username" placeholder="Masukan Username" required><br>
        <!-- <label>Email</label>
        <input type="email" name="email"  placeholder="Masukan Email" required><br> -->
        <label>Password</label>
        <input type="password" name="password" required><br>
        <button type="submit">Submit</button>
        <p>
            Belum punya akun?
            <a href="sign_up.php">Sign Up</a>
        </p>
    </form>
</body>
</html>