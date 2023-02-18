<?php
// Lines 0 - 72 written by William Hilton
// The login page allows the user to log into a valid user account that is stored in the database.
?>

<?php include("includes/config.php");?>
<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>

<div class="container middle pt-5 pb-5">
  <form class="border p-3 w-75 rounded" method="post" action="">
    <div class="mb-3">
      <h1>Sign in</h1>
    </div>
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="johnDoe2000">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="text" class="form-control" id="password" name="password" placeholder="*******">
    </div>
    <div class="mb-3">
      <label class="msg"></label></br>
        <a link class="link-primary" href="register.php">Create new account</a>
    </div>
    <div class="mb-3">
      <button class="btn btn-dark" type="submit">Sign in</button>
    </div>
  </form>
</div>

<?php
// Login user, select user account

// Get data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include("includes/connect.php");
  session_start ();
  
  if(isset($_REQUEST['username'])) {
      $username = $_REQUEST["username"];
      $password = $_REQUEST["password"];
  
      // Select user
      $sql = "SELECT * FROM [USER].[USER] WHERE USERNAME_TXT='$username'";
  
      $stmt = sqlsrv_query($conn, $sql);
      $result = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
  
      if ($result !== null) {
          $validPassword = password_verify($password, $result['PASSWORD']);
  
          if($validPassword === True) {
              echo "</br>" . "Logged in";
              $_SESSION["login"]="1";
              header("location:../index.php");
              // switch page
          } // else... if username valid && password not
  
      } else { ?>
        <script src="js/alerts.js"></script>
        <?php
        echo "Invalid username or password";

      }
  }

}

?>

<?php include("includes/footer.php"); ?>