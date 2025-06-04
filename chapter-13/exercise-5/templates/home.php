<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to login page</h1>

    <form action="../src/loginCheck.php" method="post">
        <input type="text" placeholder="Enter your username" name='username' >
        <input type="password" placeholder="Enter your password" name='password' >
        <input type="submit" value="Login as Client" name='client-btn' >
        <input type="submit" value="Login as Staff" name='staff-btn' >
    </form>
</body>
</html>