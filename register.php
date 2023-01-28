<?php include("includes/config.php");?>
<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>

<div class="container middle pt-5 pb-5">
  <form class="border p-3 w-75 rounded" action="">
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

<?php include("includes/footer.php"); ?>