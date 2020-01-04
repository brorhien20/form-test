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
        <form action="" method="POST" id="login-form">
            
            <div class="err"></div>
           <!--  <label id="key">Enter ID:</label> -->
            <input type="text" for="key" placeholder="Enter unique_id" name="id" required>
            <button type="submit" id="login-btn">Submit</button>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>

