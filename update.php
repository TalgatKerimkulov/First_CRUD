<?php
include "connect.php";
$id = $_GET['updateid'];
if (isset($_POST['submit'])) {
    $name = $row['name'];
    
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $pass = $_POST['password'];

    $sql = "UPDATE `users` SET `name` = '$name', `email` = '$email', `mobile` = '$mobile', `password` = '$pass' WHERE `users`.`id` = $id;";
    $result = mysqli_query($con, $sql);
    if ($result) {
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
        <form method="post" >
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter you name value" name="name" autocomplete="off" value=<?php  echo $name; ?>>
                
                <div>We'll never share your name with anyone else.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="Enter you email"  name="email" autocomplete="off" value=<?php echo $email; ?>>
                <div>We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" class="form-control" placeholder="Enter you mobile number" name="mobile" autocomplete="off" value=<?php echo $mobile; ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="text" class="form-control" placeholder="Enter you Password" name="password" value=<?php echo $pass;?> >
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>