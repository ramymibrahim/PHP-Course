<?php
if (!empty($_REQUEST)) {
  $username = htmlspecialchars(trim(stripslashes($_REQUEST['username'])));
  $email = htmlspecialchars(trim(stripslashes($_REQUEST['email'])));
  if (!isset($_REQUEST['username']) || empty($_REQUEST['username'])) {
    
    $username_error = 'Please enter a valid username';
  }

  var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
    <label>Name:</label>
    <?= $username ?>
    <input name="username" />
    <?= isset($username_error) ? "<span style='color:red;'>$username_error</span>" : ''; ?>
    <br />
    <label>Email: </label>
    <input type="email" name="email" />
    <br />
    <label>Message: </label>
    <textarea cols="30" rows="10" name="message"></textarea>
    <br />
    <label>Password: </label>
    <input type="password" name="password" />
    <br />
    <input type="file" name="pdf" />
    <br />
    <button>Send Message</button>
  </form>
</body>

</html>