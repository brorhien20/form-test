<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-wrap">
        <form action="" method="POST" id="register-form">
            <h1>Sign up</h1>
             <div class="err"></div>
            <input type="text" placeholder="Username" name="username" required>
            <input type="email" placeholder="email" name="email" required>
            <input type="number" placeholder="Phone Number" name="phone">
            <button type="submit" id="register-btn">Submit</button>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>

