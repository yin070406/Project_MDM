<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title> iClass Login System </title>
</head>
<body>
    <div class="Signin">
        <img src="/img/mdm.jpeg">
        <h3> iClass Login System </h3>  
        <form action="/login.php" method="post"> 
     	    <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <div class="txt_field">
                <input id="InputField_Username" type="text" placeholder="Username*" name="username">
            </div>
            <div class="txt_field">
                <input id="InputField_Password" type="password" placeholder="Password*" name="password">
            </div>
            <input type="submit" value="Login">
        </form>

        <h4><span>  </span></h4>

    </div>
    
    <script src="/script/username.js"></script>
    <script src="/script/password.js"></script>
</body>
</html>