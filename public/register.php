<?php include("includes/config.php");?>
<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>

<div class="container middle pt-5 pb-5">
  <form class="border p-3 w-75 rounded" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="mb-3">
      <h1>Create account</h1>
    </div>
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="johnDoe2000">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="*******">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="johnDoe@gmail.com">
    </div>
    <div class="mb-3">
        <a link class="link-primary" href="login.php">Login</a>
    </div>
    <div class="mb-3">
      <button class="btn btn-dark" type="submit">Create account</button>
    </div>
  </form>
</div>

<?php
// Insert new user account
echo print_r($_POST,true);
// Get data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];


  //echo "</br>";
  //echo $username;
  //echo "</br>";
  //echo $password;
  //echo "</br>";
  //echo $email;
}

?>

<?php include("includes/footer.php"); ?>