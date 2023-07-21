<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>  
    <div class = "container mt-4">
        <h1>Login Form</h1>
        <form action="authlogic.php" method="post" class="register_form">
            <input type="text" class="form-control" name="login" id="login" placeholder="Enter a login"><br>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter a name"><br>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter a password"><br>
            <button type="submit" name="send" class="btn btn-lg btn-outline-primary">Login</button>
        </form>
    </div>
   
</body>
</html>