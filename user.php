<?php
include_once ("config/session.php");
include_once ("config/admin.php");
 if (!isset($_SESSION['unique_id'])) {
    echo '<script>location.href="index.php"</script>';
}
$id    = $_SESSION['unique_id'];
$site  = new admin;
$query = "SELECT * FROM user WHERE unique_id='$id' ";
$data  = $site->getUserInfo($query);
?>
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

      <p>User Account </p><br>
      <div>
          <p>Username: <?= $data->username; ?></p><br>
          <p>Email: <?= $data->email; ?> </p><br>
          <p>User ID: <?= $data->unique_id; ?></p><br>
      </div>
      <a href="index.php" onclick="<?= $site->logout(); ?>">logout</a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>

