<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>log in</title>
</head>
<body>
    <div class="content">
        <form action="validation.php" method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <select name="role" id="select" required>
                <option value="" disabled selected >Select</option>
                <option value="admin" >Admin</option>
                <option value="staff" >Staff</option>
                <option value="student" >Student</option>
            </select>
            <input class="btn" type="submit" name="login" value="Login">
        </form>
    </div>
</body>
</html>