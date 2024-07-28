<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <form method="POST" action="proses_signup.php">
        <h2>Sign Up</h2>
        <label>Username</label>
        <input type="text" name="username" placeholder="Masukan Username" required><br>
        <label>Email</label>
        <input type="email" name="email"  placeholder="Masukan Email" required><br>
        <label>Password</label>
        <input type="password" name="password" required><br>
        <label>Konfirmasi Password</label>
        <input type="password" name="confirm" required><br>
        <label>No Hp</label>
        <input type="text" name="no_hp" required><br>
        <label>Alamat</label>
        <input type="text" name="alamat" required><br>
        <button type="submit">Sign Up</button>
        <p>
            Sudah punya akun?
            <a href="login.php">Login</a>
        </p>
    </form>

</body>
</html>