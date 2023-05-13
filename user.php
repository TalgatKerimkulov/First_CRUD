<?php
include "connect.php";
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $pass = $_POST['password'];

  $sql = "INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`)
   VALUES (NULL, '$name', '$email', '$mobile', '$pass')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    // echo "Connect succes";
    header('location:display.php');
  } else {
    die(mysqli_error($con));
  }
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create Option</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter you name" name="name" autocomplete="off">
        <div>We'll never share your name with anyone else.</div>
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" placeholder="Enter you email" name="email" autocomplete="off">
        <div>We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label class="form-label">Mobile</label>
        <input type="text" class="form-control" placeholder="Enter you mobile number" name="mobile" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="text" class="form-control" placeholder="Enter you Password" name="password">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>

</body>

</html>