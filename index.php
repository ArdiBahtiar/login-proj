<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>LOGIN</h2>
    <?php if(isset($_GET['error'])) {?>
    <p class="error"> <?php echo $_GET['error']; ?> </p>
    <?php }?>

    <!-- <label>Username</label> <br> -->
    <label for="username">Username : </label>
    <input type="text" name="username" placeholder="Username"><br>
    <label for="password">Password : </label>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit">Login</button>
</body>
</html>